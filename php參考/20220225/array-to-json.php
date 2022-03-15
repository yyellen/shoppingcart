<?php
$student=[
    "name"=>"John",
    "height"=>173,
    "weight"=>72,
];

/* JS寫法
let student={
    "name"="John",
    "height"=173,
    "weight"=72
}
*/
// echo json_encode($student);
?>
<h1></h1>
<script>
    let student=<?=json_encode($student)?>;
    console.log(student);
    let h1=document.querySelector("h1");
    h1.innerText=student.name;
</script>