<?php
//vetor
//$diasemana = array(0=>'domingo',1=>'segunda');
//$diasemana = [0=>'domingo',1=>'segunda',2=>'terca',3=>'quarta',4=>'quinta',5=>'sexta',6=>'sabado'];
//echo "<pre>";
//var_dump($diasemana);

//$hoje = date('w');

//var_dump($hoje);

//echo "hoje é {$diasemana[$hoje]}"; //interpolaçao de vetor tem que usar {}
//echo '<br>';

//$aluno = ['matricula'=>41217,'nome'=>'hugo','semestre'=>2];
//var_dump($aluno);

$aluno = [  0 => [  'matricula' => 634545, 
                    'nome' => 'João',
                    'semestre' => 2],
            1 => [  'matricula' => 8548, 
                    'nome' => 'Paulo',
                    'semestre' => 3],
            2 => [  'matricula' => 65422, 
                    'nome' => 'Maria',
                    'semestre' => 1]];


echo '<table border="1">';
echo '<tr><th>matricula</th><th>nome</th><th>semestre</th></tr>'; 

for ($i=0 ; $i<count($aluno); $i++){
    echo    "<tr>
            <td> {$aluno[$i]['matricula']}  </td>
            <td> {$aluno[$i]['nome']}  </td>
            <td> {$aluno[$i]['semestre']}  </td>
        </tr>";
}

 echo '</table>';

 