<?php

namespace rebanhoweb\Http\Controllers;

use DB;
use Request;
use rebanhoweb\Leite;

use rebanhoweb\Http\Requests\LeiteRequest;
use rebanhoweb\Http\Controllers\Controller;

class LeiteController extends Controller
{
    public function relatorio()
	{
		return view('leite.relatorio');
	}
	
	public function FormataMes($date)
	{
		switch(date('m',$date))
		{
			case '01': return "Janeiro ".date('Y',$date).""; break;
			case '02': return "Fevereiro ".date('Y',$date).""; break;
			case '03': return "Mar&#231;o ".date('Y',$date).""; break;
			case '04': return "Abril ".date('Y',$date).""; break;
			case '05': return "Maio ".date('Y',$date).""; break;
			case '06': return "Junho ".date('Y',$date).""; break;
			case '07': return "Julho ".date('Y',$date).""; break;
			case '08': return "Agosto ".date('Y',$date).""; break;
			case '09': return "Setembro ".date('Y',$date).""; break;
			case '10': return "Outubro ".date('Y',$date).""; break;
			case '11': return "Novembro ".date('Y',$date).""; break;
			case '12': return "Dezembro ".date('Y',$date).""; break;
		}
	}
	
	public function litros($data)
	{
		$litros = Leite::where('data',$data)->value('litros');
				
		return $litros;
	}
	
	public function soma($date)
	{
		$mes = date('Y-m',$date)."%";
		$soma = Leite::where('data','like',$mes)->sum('litros');
		
		return number_format($soma,0,"",".");
	}
		
	public function adiciona(LeiteRequest $request)
	{
		$litros = Leite::where('data',Request::input('data'))->value('litros');
		
		if($litros==0)
		{
			Leite::where('data',Request::input('data'))->delete();
		}
		else
		{
			if(empty($litros))
				Leite::create($request->all());			
			if($litros>0)
				Leite::where('data',Request::input('data'))->update(['litros'=>Request::input('litros')]);
		}
				
		$data = explode("-",Request::input('data'));
		
		return redirect("/leite/coleta/".$data[1]."/".$data[0]."");
	}
	
	public function coleta($month = null, $year = null)
	{
		$month = Request::route('mes');
		$year = Request::route('ano');
		$calendar = '';
		if($month == null || $year == null)
		{
			$month = date('m');
			$year = date('Y');
		}
		$date = mktime(12, 0, 0, $month, 1, $year);
		$daysInMonth = date("t", $date);
		$offset = date("w", $date);
		$rows = 1;
		$prev_month = $month - 1;
		$prev_year = $year;
		if ($month == 1)
		{
			$prev_month = 12;
			$prev_year = $year-1;
		}
	
		$next_month = $month + 1;
		$next_year = $year;
		if ($month == 12)
		{
			$next_month = 1;
			$next_year = $year + 1;
		}
		for($i = 1; $i <= $offset; $i++)
		{
			$calendar .= "<td></td>";
		}
		for($day = 1; $day <= $daysInMonth; $day++)
		{
			if( ($day + $offset - 1) % 7 == 0 && $day != 1)
			{
				$calendar .= "</tr><tr>";
				$rows++;
			}
			$data = $year."-".$month."-".$day;
			$litros = $this->litros($data);
            if(empty($litros))
                $litros = "&nbsp;&nbsp;";
			$calendar .= "<td align='center'><button class='btn btn-outline btn-primary btn-block' data-toggle='modal' data-target='#modal".$day."'>";
			$calendar .= $day;
			$calendar .= "</br>".$litros."</button></td>";
			$calendar .= "<div class='modal fade' id='modal".$day."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
            $calendar .= "<div class='modal-dialog'>";
            $calendar .= "<div class='modal-content'>";
            $calendar .= "<div class='modal-header'>";
            $calendar .= "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
            $calendar .= "<h4 class='modal-title' id='myModalLabel'>Coleta de leite</h4>";
            $calendar .= "</div>";
			$calendar .= "<form action='".asset('/leite/adiciona')."' method='post'>";
            $calendar .= "<div class='modal-body'>";
            $calendar .= "<div class='form-group'>";
            $calendar .= "<label>Litros Coletados em ".date('d/m/Y',strtotime($data))."</label>";
            $calendar .= "<input type='hidden' name='data' value='".$data."'>";
			$calendar .= "<input class='form-control' placeholder='".$this->litros($data)."' name='litros'>";			
			$calendar .= "<input type='hidden' name='_token' value='".csrf_token()."'>";
            $calendar .= "</div>";
            $calendar .= "</div>";
            $calendar .= "<div class='modal-footer'>";
            $calendar .= "<button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>";                        
			$calendar .= "<button type='submit' class='btn btn-primary'>Salvar</button>";
			$calendar .= "</form>";
            $calendar .= "</div>";
            $calendar .= "</div>";
            $calendar .= "</div>";
            $calendar .= "</div>";
		}
		while( ($day + $offset) <= $rows * 7)
		{
			$calendar .= "<td></td>";
			$day++;
		}
			
		return view('leite.coleta')->withColeta($calendar)->withPrevmonth($prev_month)->withPrevyear($prev_year)
									->withNextmonth($next_month)->withNextyear($next_year)->withData($this->FormataMes($date))
									->withSoma($this->soma($date));
	}
}
