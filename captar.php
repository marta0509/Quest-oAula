<?php

//defenir o array

$num=0;
$inicio=0;
$fim=0;
if (isset($_POST["txt_array"]) && isset($_POST["txt_inicio"]) && isset($_POST["txt_fim"]) && isset($_POST["txt_fim"])) {

		if (is_numeric($_POST["txt_array"]) && is_numeric($_POST["txt_inicio"]) && is_numeric($_POST["txt_fim"]) && is_numeric($_POST["txt_pesquisa"])) {
			
			$num=$_POST["txt_array"];
			$inicio=$_POST["txt_inicio"];
			$fim=$_POST["txt_fim"];
			$pesquisa=$_POST["txt_pesquisa"];
			
			echo "Valores gerados pelo array: " ;

			for ($i=0; $i < $num; $i++) 
			{ 
				$numeros[$i]=rand($inicio, $fim);
				echo $numeros[$i]. ", ";
				;
			}

			echo "<br>";

			//Procura valores

			for ($i=0; $i <$num ; $i++)
			{ 
				if($pesquisa== $numeros[$i])
				{
					echo "<br>";
					echo "O valor " .$numeros[$i]. " encontra-se na posição " .$i;
				}
			}

			echo "<br><br>";
			
			//Soma,produto e media

			$soma=0;
			$produto=1;
			$media=0;

			for ($i=0; $i <$num ; $i++)
			{ 
				$soma=$soma + $numeros[$i];
				$produto= $numeros[$i] * $produto;
				$media= $soma / $num;
			}
			echo "A soma dos valores do array é: " .$soma;
			echo "<br><br>";
			echo "O produto dos valores do array é: " .$produto;
			echo "<br><br>";
			echo "A média dos valores do array é: " .$media;
			echo "<br><br>";
			//Para as 2 opções do fim

			//opção 1
			$op =$_POST["rbt_valor"];
			
			
				for ($i=1; $i <=$op ; $i++)
				    { 
							$troca=true;
							$count=0;
							while ($troca) {
								$troca=false;

								//crescente
								
								for ($i=0; $i < $num-1 ; $i++) { 
									if ($op==1) 
									{
										if ($count==0) 
										{
											echo "Array por ordem crescente: " ;
										}
										if ($numeros[$i] > $numeros[$i+1]) 
										{
											$temp=$numeros[$i];
											$numeros[$i]=$numeros[$i+1];
											$numeros[$i+1] =$temp;
											$troca=true;
											$count=$count +1;
										}	
									}
									//decrescente
									
									elseif ($op==2) {
										if ($count==0) 
										{
											echo "Array por ordem decrescente: " ;
										}
										for ($i=0; $i < $num-1 ; $i++) 
										{ 
											if($numeros[$i] < $numeros[$i+1])
											{
												$temp=$numeros[$i];
												$numeros[$i]=$numeros[$i+1];
												$numeros[$i+1] =$temp;
												$troca=true;
												$count=$count +1;
											}
										}
									}
								}
							}
							for ($i=0; $i <$num ; $i++) 
							{ 
								echo $numeros[$i]. ", ";
							}
						
					}	
					echo "<br><br>";
					echo "Foram realizadas " .$count. " trocas.";
			
		}
		else
		{

			return "Não foram inseridos valores!";
		}	
	
}

?> 