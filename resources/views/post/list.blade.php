@extends('layout')
@section('title', '掲示板')
@section('content')
<div>
    @foreach ($posts as $post)
    <?php
    $postTitle = $post['title'];
    $postBody = $post['body'];
    $postId = $post['post_id'];
    $postCreatAt = $post['create_at'];
    $postUserId = $post['user_id'];
    ?>
    <?php if (isset($post['image'])) : ?>
        <img src="../<?= $post['image'] ?>" alt="userIcon" class="profilePageImage">
    <?php else : ?>
        <img src="defaultUserImg.jpeg" alt="userIcon" class="profilePageImage">
    <?php endif; ?>
    <a href="profile/<?= $post['user_id'] ?>">投稿者: {{ $post['username'] }}</a>
    <br>
    <div id="replace_content_<?= $postId ?>">
        <div id='post_title_<?= $postId ?>'>
            <?= $postTitle ?>
        </div>
        <div id='post_body_<?= $postId ?>'>
            <?= $postBody ?>
        </div>
    </div>
    <div>
        <div>
            投稿ID:<?= $postId ?>
        </div>
        <div>
            投稿日時：<?= $postCreatAt ?>
        </div>
    </div>
    <?php
    if (session('username') == $post['username']) :
    ?>
        <button type="button" onclick="document.getElementById('is_edit_<?= $postId ?>').style.display='block'">編集</button>
        <div id="is_edit_<?= $postId ?>" style="display:none">
            <textarea required="required" id="edit_title_<?= $postId ?>" cols="50" rows="10" value="edit_title"><?= $postTitle ?></textarea>
            <textarea required="required" id="edit_body_<?= $postId ?>" cols="50" rows="10" value="edit_body"><?= $postBody ?></textarea>
            <button type="button" onclick="document.getElementById('is_edit_<?= $postId ?>').style.display = 'none'">閉じる</button>
            <button id="edit_<?= $postId ?>" class="edit_button"> 再投稿 </button>
        </div>
        <button id="delete_<?= $postId ?>" class="delete_button">削除</button>
        <input type="hidden" id="user_id_<?= $postId ?>" value=<?= $postUserId ?>>
    <?php endif; ?>
    <?php ?>
    <br>
    <hr>
    @endforeach
</div>
@endsection