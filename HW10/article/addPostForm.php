<?php
    require_once './header.php';
?>

<div class="form">
    <div class="container">
        <form action="./form.php" method="post">
            <fieldset>
                <legend>New post</legend>
                <div class="form_field">
                    <label>Enter title</label><br>
                    <input required type="text" name="title" placeholder="Введите заголовок статьи">
                </div>
                <div class="form_field">
                    <label>Enter content</label><br>
                    <textarea required name="content" placeholder="Введите текст статьи"></textarea>
                </div>
                <div class="form_field">
                    <label>Enter name of category</label><br>
                    <input required type="text" name="category_name" placeholder="Введите название категории">
                </div>
                <div class="form_field">
                    <label>Enter name of author</label><br>
                    <input required type="text" name="author_name" placeholder="Введите имя автора статьи">
                </div>
            </fieldset>
            <button class="btn__primary">Add post</button>
        </form>
    </div>
</div>

<?php 
require_once './footer.php';