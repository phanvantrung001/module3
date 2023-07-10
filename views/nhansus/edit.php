<div class="col-12">
    <form action="index.php?action=update&id=<?= $row['id']; ?>" method="post" enctype="multipart/form-data" style="border: 1px solid #ccc; padding: 20px;">
        <div class="mb-3">
            <label class="form-label">Tên</label>
            <input type="text" name="ten_nhan_su" value="<?= $row['ten_nhan_su']; ?>" class="form-control">
            <?php if (isset($errors['ten_nhan_su'])): ?>
                <div class="text-danger"><?= $errors['ten_nhan_su']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Vị Trí</label>
            <input type="text" name="vi_tri_cong_tac" value="<?= $row['vi_tri_cong_tac']; ?>" class="form-control">
            <?php if (isset($errors['vi_tri_cong_tac'])): ?>
                <div class="text-danger"><?= $errors['vi_tri_cong_tac']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Chi Nhanh</label>
            <input type="text" name="chi_nhanh" value="<?= $row['chi_nhanh']; ?>" class="form-control">
            <?php if (isset($errors['chi_nhanh'])): ?>
                <div class="text-danger"><?= $errors['chi_nhanh']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Tuổi</label>
            <input type="text" name="tuoi" value="<?= $row['tuoi']; ?>" class="form-control">
            <?php if (isset($errors['tuoi'])): ?>
                <div class="text-danger"><?= $errors['tuoi']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày Làm Việc</label>
            <input type="text" name="ngay_bat_dau_cong_tac" value="<?= $row['ngay_bat_dau_cong_tac']; ?>" class="form-control">
            <?php if (isset($errors['ngay_bat_dau_cong_tac'])): ?>
                <div class="text-danger"><?= $errors['ngay_bat_dau_cong_tac']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Lương</label>
            <input type="text" name="muc_luong" value="<?= $row['muc_luong']; ?>" class="form-control">
            <?php if (isset($errors['muc_luong'])): ?>
                <div class="text-danger"><?= $errors['muc_luong']; ?></div>
            <?php endif; ?>
        </div>
       
       
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
    </form>
</div>