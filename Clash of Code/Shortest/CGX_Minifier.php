<?fscanf(STDIN,"%d",$N);$s=$_='';for($b=$i=0;$i<$N;$i++)$s.=stream_get_line(STDIN,99,"\n");for($i=0;$i<strlen($s);$i++){$c=$s[$i];if($c=="'"){$b=!$b;$_.=$c;}elseif(($c!="\t"&&$c!=" ")||$b){$_.=$c;}}echo$_;