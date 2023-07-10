<div class="col-12">
    <form method="post" action="index.php?action=store" >
        <div class="mb-3">
            <label class="form-label">Tên</label>
            <input type="text" name="ten_nhan_su" class="form-control">
            <?php if (isset($errors['ten_nhan_su'])): ?>
                <div class="text-danger"><?php echo $errors['ten_nhan_su']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Vị Trí</label>
            <input type="text" class="form-control" name="vi_tri_cong_tac">
            <?php if (isset($errors['vi_tri_cong_tac'])): ?>
                <div class="text-danger"><?php echo $errors['vi_tri_cong_tac']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Chi Nhánh</label>
            <input type="text" class="form-control" name="chi_nhanh">
            <?php if (isset($errors['chi_nhanh'])): ?>
                <div class="text-danger"><?php echo $errors['chi_nhanh']; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Tuổi</label>
            <input type="text" class="form-control" name="tuoi">
            <?php if (isset($errors['tuoi'])): ?>
                <div class="text-danger"><?php echo $errors['tuoi']; ?></div>
            <?php endif; ?>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Ngày Làm Việc</label>
            <input type="date" class="form-control" name="ngay_bat_dau_cong_tac">
            <?php if (isset($errors['ngay_bat_dau_cong_tac'])): ?>
                <div class="text-danger"><?php echo $errors['ngay_bat_dau_cong_tac']; ?></div>
            <?php endif; ?>
        </div>
         
        <div class="mb-3">
            <label class="form-label">Lương</label>
            <input type="text" class="form-control" name="muc_luong">
            <?php if (isset($errors['muc_luong'])): ?>
                <div class="text-danger"><?php echo $errors['muc_luong']; ?></div>
            <?php endif; ?>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
    </form>
</div>