<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <title></title>
    <meta charset="" />
    <meta name="description" content="descrição da página" />
    <meta name="keywords" content="Plavras chaves" />
    <meta name="author" content="Romulo de Oliveira Azevedo" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <style>
        div#border{
            border: 2px;          
        };    
    </style>
</head>
<body>
    <h1><u>Elementos de array</u></h1>
    <h2>Lista ordenada</h2>
<?php
    $infos = [];
    $foon= [];
    $matriz = [];
    $xi = [];

    $matriz = [
        "Pessoa"  => [
            [            
            "Nome" => "Romulo",
            "Cor"  => "Pardo ",
            "altura" => '1,71'
            ],
            [
                "Nome" => "Gloria",
                "Cor" => "Branca ",
                "altura" => '1,55'
            ], 
            [
                "Nome" => "Pedro",
                "Cor" => "Moreno ",
                "altura" => '1,64'
            ], 
            [
                "Nome" => "Marcelo",
                "Cor" => "Amarelo ",
                "altura" => '1,80'
            ], 
            [
                "Nome" => "Avô_Pedro",
                "Cor" => "Galego ",
                "altura" => '1,62'
            ]
        ],
      
        "castelo" => [
            [
            "Nome" => "Castelo.Show",
            "Cor" => 0,
            "altura" => "número"
            ],  
            [
            "Nome" => "Castelo.ok",
            "Cor" => 54,
            "altura" => "xxx"
            ],  
            [
            "Nome" => "Castelo.kkk",
            "Cor" => 23,
            "altura" => "llllll"
            ]
    ]    
];    
            
$xi = [
    'pessoas1' => [
    [
        'nome'      => 'Romulo',
        'sobrenome' => 'Azevedo',
        'tipo'      => 'B',
        'endereco'  => 'EPTG',
        'observe'   => 'Pombal'
    ],
    [
        'nome'      => 'Gloria',
        'sobrenome' => 'Silva',
        'tipo'      => 'C',
        'endereco'  => 'Guará I',
        'observe'   => 'Guará'
    ],
    [
        'nome'      => 'Pedro',
        'sobrenome' => 'Neto',
        'tipo'      => 'l',
        'endereco'  => 'Bahia',
        'observe'   => 'BA'
    ]
    ],

"Capricho" => [
    [
        'nome'      => 'Presidencia',
        'sobrenome' => 'Cabulos',
        'tipo'      => '45456',
        'endereco'  => 'ES',
        'observe'   => 'POA'   
    ],
    [
        'nome'      => 'Presidencia',
        'sobrenome' => 'Cabulos',
        'tipo'      => '45456',
        'endereco'  => 'ES',
        'observe'   => 'POA'   
    ],
    [
        'nome'      => 'Presidencia',
        'sobrenome' => 'Cabulos',
        'tipo'      => '45456',
        'endereco'  => 'ES',
        'observe'   => 'POA'   
    ]
]
];

$arrayassociativo = [
    'nome' => 'Rossevel',
    'telefone' => 2541,
    'cor' => 'preto',
    'sel' => 'your',
    'tudo' => 'sobre'
];

$infos[] = $matriz;
$foon[] = $xi;

?>

 
<div id="boder" >
<table border=1 align=center width=90%  >

    <?php foreach($infos as $key => $valor) :?>   
  
    <?php foreach($valor as $key => $op) :?>           
  
    <?php foreach($op as $key => $tudo) :?>
     
        <tr>
        <th>ID :</th>
            <th> Nome </th>
            <th> Cor </th>
            <th> Altura </th>      
        </tr>
    <tr>   
        <td></td>
        <td><?= $tudo['Nome']; ?></td>
        <td><?= $tudo['Cor']; ?></td>
        <td><?= $tudo['altura']; ?></td>
     
    </tr>
     
    <?php endforeach;?>
    <?php endforeach;?>
    <?php endforeach;?>

</table>

<p>Terra</p>

<div id="boder" >
<table border=1 align=center width=90%  >
    <?php foreach($foon as $bol) :?> 
<?php foreach($bol as $te) :?> 
    <?php foreach($te as $ui) :?> 


        <tr>
        <th>ID :</th>
            <th> Nome </th>
            <th> Sobrenome </th>
            <th> Tipo </th>    
            <th> Endereço </th>
            <th> Outros </th>      
        </tr>
    <tr>   
        <td>#</td>
        <td><?= $ui['nome']; ?></td>
        <td><?= $ui['sobrenome']; ?></td>
        <td><?= $ui['tipo']; ?></td>
        <td><?= $ui['endereco']; ?></td>
        <td><?= $ui['observe']; ?></td>
    </tr>
     
    <?php endforeach;?>
    <?php endforeach;?>
    <?php endforeach;?>

</table>
   
    <?php  
    
print"<pre>";
print_r($matriz);
print"</pre>";

echo "<hr>";

print"<pre>";
print_r($infos[0]['Pessoa'][0]);
print_r($matriz['Pessoa'][1]);
print_r($matriz['Pessoa'][2]);
print"</pre>";

echo "<hr>";


print"<pre>";
print_r (count($xi));
echo "<br/>";
print_r(count($infos));
print"</pre>";

echo "<hr>";

print"<pre>";
print_r ($xi);
print"</pre>";

print"<pre>";
print_r (count($arrayassociativo));
print"</pre>";

print"<pre>";
print_r ($arrayassociativo['nome']);
print "<br>";
print_r ($arrayassociativo['telefone']);
print"</pre>";


echo "<hr>";
$dom []= ($arrayassociativo['nome']);


print"<pre>";
print_r($dom);
print"</pre>";

echo "<hr>";

print"<pre>";
print_r(count($matriz));
print"</pre>";
 
    ?>
    
    
    
     
    
    </div>

    


</body>
</html>