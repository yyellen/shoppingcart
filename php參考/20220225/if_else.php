<?php
$john_score=90;
$sam_score=80;
// if($john_score > $sam_score){
//     echo "John is better.";
// }elseif($john_score < $sam_score){
//     echo "Sam is better.";
// }else{
//     echo "John and Sam are equal.";
// }

// 用:取代{}
// if($john_score > $sam_score):
//     echo "John is better.";
// elseif($john_score < $sam_score):
//     echo "Sam is better.";
// else:
//     echo "John and Sam are equal.";
// endif;
// ?>

<!-- 判斷式與HTML混寫 -->
<?php if($john_score > $sam_score): ?>
    John is better.
<?php elseif($john_score < $sam_score): ?>
    Sam is better.
<?php else: ?>
    John and Sam are equal.
<?php endif; ?>
