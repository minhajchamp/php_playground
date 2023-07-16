<?php

// ARROW FUNCTION IN ARRAY MAP
$result = array_map(
    fn ($value): int => $value * 2,
    range(1, 5)
);


// ANONYMOUS CLASS
$anon = new class
{

    public $myData = [];

    public function records(): array
    {

        $this->myData[] = array(
            'Fruits' => array('Banana', 'Orange'),
            'Snacks' => array('Chochlate'),
            'Drinks' => [
                'Non al' => array(
                    'Coke', 'Pakola'
                ),
                'Al' => array(
                    'Wine'
                ),
            ]
        );

        return $this->myData;
    }
};

// Closures

$array = array('Ruby', 'PHP', 'JavaScript', 'HTML');
array_walk($array, function($v, $index) {
  $v = $v . ' - Programming Language';
  print_r($v);
});

echo '<pre>';
print_r($array);

//print_r($anon->records());
