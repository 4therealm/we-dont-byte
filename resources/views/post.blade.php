    <link rel="stylesheet" href="app.css">
    <title>Document</title>


<body>
    <article>
<h1>
  <?= $post->title; ?>
</h1>
    <div>
      <?= $post->body; ?>
    </div>

    </article>

    <a href="/posts">go back</a>
</body>

</html>
