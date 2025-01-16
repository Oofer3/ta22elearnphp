<?php view('partials/header'); ?>

<main class="container">
    <h1>Postituse Detailid</h1>
    <table class="table table-bordered">
        <tr>
            <th>Väli</th>
            <th>Väärtus</th>
        </tr>
        <tr>
            <td><strong>ID</strong></td>
            <td><?= htmlspecialchars($post->id, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td><strong>Title</strong></td>
            <td><?= htmlspecialchars($post->title, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td><strong>Content</strong></td>
            <td><?= nl2br(htmlspecialchars($post->body, ENT_QUOTES, 'UTF-8')); ?></td>
        </tr>
    </table>

    <a href="/admin/posts/edit?id=<?=$post->id?>" class="btn btn-warning">Edit Post</a>
    <a href="/admin/posts" class="btn btn-secondary">Back to Posts</a>
</main>

<?php view('partials/footer'); ?>
