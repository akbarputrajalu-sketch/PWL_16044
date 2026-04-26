<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h3 class="mb-4">Profil Pengguna</h3>
            
            <div class="card">
                <div class="card-body">
                    <ul style="list-style: none; padding: 0;">
                        <li class="mb-3">
                            <strong>Username:</strong> <?= htmlspecialchars($username) ?>
                        </li>
                        <li class="mb-3">
                            <strong>Role:</strong> <?= htmlspecialchars($role) ?>
                        </li>
                        <li class="mb-3">
                            <strong>Email:</strong> <?= htmlspecialchars($email) ?>
                        </li>
                        <li class="mb-3">
                            <strong>Waktu Login:</strong> <?= $login_time ?>
                        </li>
                        <li class="mb-3">
                            <strong>Status Login:</strong> <?= htmlspecialchars($status) ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

