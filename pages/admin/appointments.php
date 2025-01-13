<div class="table-responsive">
    <table class="table data-table">
        <thead>
            <tr>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($appointments as $apt): ?>
            <tr>
                <td><?= $apt['patient_name'] ?></td>
                <td><?= $apt['doctor_name'] ?></td>
                <td><?= $apt['appointment_date'] ?></td>
                <td>
                    <span class="status-badge <?= $apt['status'] ?>">
                        <?= ucfirst($apt['status']) ?>
                    </span>
                </td>
                <td>
                    <div class="action-buttons">
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> 