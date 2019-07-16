<!-- traditional looping with PHP -->
<?php foreach ($tasks as $task) : ?>
  <li><?= $task; ?></li>
<?php endforeach; ?>

<!-- using {{}} to interpolate in Laravel sanitizes inputs by converting them to text, making it superior to 
<\?= $foo; 

This feature can be turned off by adding {!! foo !!}. Basically the !! is indicating that this is dangerous to do.
-->