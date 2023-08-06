<?php
namespace Codecademy;

function whatRelation($dna_percentage) {
  if ($dna_percentage === 100) {
    echo "identical twins";
  } elseif ($dna_percentage > 34) {
    echo "parent and child or full siblings";
  } elseif ($dna_percentage > 13) {
    echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
  } elseif ($dna_percentage > 5) {
    echo "first cousins";
  } elseif ($dna_percentage > 2) {
    echo "second cousins";
  } elseif ($dna_percentage > 0) {
    echo "third cousins";
  } else {
    echo "not genetically related";
  }
 }

 whatRelation(100);
 echo "\n";
 whatRelation(35);
 echo "\n";
 whatRelation(14);
 echo "\n";
 whatRelation(6);
 echo "\n";
 whatRelation(3);
 echo "\n";
 whatRelation(1);
 echo "\n";
 whatRelation(0);
 echo "\n";