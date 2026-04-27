<?= $this->extend('layouts/base') ?>

<?= $this->section('title') ?>
    Electric Company - Home
<?= $this->endSection() ?>

<?= $this->section('description') ?>
    Electric Company is an electric utility company in the Philippines that provides electricity to residential, commercial, and industrial customers.
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>Hello World</h1>
    <p>This content is injected into the base layout.</p>
    <button id="ajax-btn" class="btn btn-primary">Click Me</button>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script>
        $('#ajax-btn').on('click', function() {
            alert('jQuery works inside the section!');
        });
    </script>
<?= $this->endSection() ?>
