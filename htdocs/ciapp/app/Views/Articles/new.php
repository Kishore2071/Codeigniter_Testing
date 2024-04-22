<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>New Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>New Article</h1>

<?= form_open("articles/create") ?>

<label for="title">Title</label>
<input type="text" id="title" name="title" value="<?= old("title", esc($article->title)) ?>">

<label for="content">Content</label>
<textarea id="content" name="content"><?= old("content", esc($article->content)) ?></textarea>

<button>Save</button>


</form>

<?= $this->endSection() ?>