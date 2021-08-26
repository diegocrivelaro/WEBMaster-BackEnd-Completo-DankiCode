<?php
    $conteúdo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lacinia sed sapien eu rutrum. Suspendisse non leo pulvinar, bibendum nibh eu, cursus tellus. Phasellus eget mi nunc. Nullam a justo sit amet ante consectetur iaculis id et sapien. Sed mollis ex quam, id rutrum eros rutrum eget. Phasellus molestie quam sit amet eros lobortis pellentesque. Donec malesuada velit ante, aliquam consequat metus varius at. Morbi leo leo, fermentum ac neque ut, blandit mollis sapien.";

    echo substr($conteúdo, 0, 5); /* substr($var, COMECE DA LETRA 0, PARE NA LETRA 5) */

    echo "<hr>";

    $conteúdohtml = "<h1>Inserindo tags no formulário</ht>";
    echo strip_tags($conteúdohtml); /* Strip tag retira todas tags HTML */

    echo "<hr>";

    echo htmlentities("<div></div>"); /* Serve para o navegador não interpretar o código */

?>
