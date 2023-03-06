<!doctype html>

<title>Licenta</title>
<link rel="stylesheet" href="app.css">
<body>

<?php foreach($posts as $post) :?>
<article>
    <?= $post; ?>
</article>
<?php endforeach; ?>

{{--@foreach($posts as $post)
    <article>
        $post
    </article>
@endforeach--}}


</body>
