<div>
    <?php
    $userId = $user['id'];
    $username = $user['username'];
    $introduce = $user['introduce'];
    $image = $user['image'];
    if (isset($image)) : ?>
        <img src='../<?= $image ?>' alt="userIcon" class="profilePageImage">
    <?php else : ?>
        <img src="/defaultUserImg.jpeg" alt="userIcon" class="profilePageImage">
    <?php endif; ?>
    {{ $introduce }}
    <?php
    if ($userId == session('user_id')) :
    ?>
        <form action='../app/edit_profile.php?userId=<?= $user['id'] ?>' method="post">
            <input type="submit" value='プロフィールを編集'>
            <input type="hidden" name='userId' value=<?= $user['id'] ?>>
            <input type="hidden" name='introduce' value=<?= $introduce ?>>
            <input type="hidden" name='image' value=<?= $image ?>>
        </form>
    <?php endif; ?>
    <a href="../">投稿一覧</a>
</div>