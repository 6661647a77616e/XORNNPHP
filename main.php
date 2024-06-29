<?php
require 'vendor/autoload.php';
use Dragonzap\NeuralNetwork\NeuralNetwork;

$total_input_neurons  =2;
$total_output_neurons =1;
$learning_rate=0.1;
$epochs=10000;
$total_hidden_layer_neurons=10;
$activation_function='sigmoid';
$neuralNetwork=new NeuralNetwork($tota_input_neurons,$total_output_neurons, $learning_rate,  $epochs, $total_hidden_layer_neurons, $activation_function);
$training_record_output = [
	[1],
	[1],
	[0],
	[0]
];
$neuralNetwork->trainNetworkBatch(count($training_record_input),function ($page, $total_per_page, &$input, &$output) use($training_record_input,$training_record_ouput){
	$input=$training_record_input;
	$output=$training_record_output;

},count($training_record_input));

$input=[0,1];
$neuralNetwork->forwardPass($input,$output)
print_r($output)



