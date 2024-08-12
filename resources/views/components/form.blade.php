<section class="register d-flex justify-content-center align-items-center ">
    <div class="d-flex flex-column justify-content-center align-items-center w-100 p-3" style="max-width: 624px;">
        <div class="text-center mb-4">
            <h3>Registrasi</h3>
            <p>Lengkapi data diri kamu dengan benar</p>
        </div>
        <form action="" class="bg-white p-4 w-100 rounded-3 shadow-sm">
            <div class="form-floating mb-4">
                <input
                    type="text"
                    class="form-control"
                    id="floatingName"
                    placeholder="Nama lengkap"
                />
                <label for="floatingName">Nama lengkap*</label>
            </div>
            <div class="form-floating mb-4">
                <input
                    type="email"
                    class="form-control"
                    id="floatingEmail"
                    placeholder="name@example.com"
                />
                <label for="floatingEmail">Email*</label>
            </div>
            <div class="form-floating mb-4">
                <input
                    type="tel"
                    class="form-control"
                    id="floatingPhone"
                    placeholder="Nomer Telepon"
                />
                <label for="floatingPhone">Nomer Telepon</label>
            </div>
            <div class="form-floating mb-4">
                <textarea class="form-control" placeholder="Alasan mengikuti program" id="floatingTextarea2" style="height: 130px"></textarea>
                <label class="text-wrap" for="floatingTextarea2">Alasan mengikuti program “Explore Thailand by Detiktravel”</label>
            </div>
            <div class="mb-4">
                <div class="form-group">
                    <label for="profilePicture" class="d-block">
                        <div id="uploadBox" class="upload-box d-flex flex-column align-items-center justify-content-center bg-light">
                            <span id="plusIcon" class="circle d-flex align-items-center justify-content-center rounded-circle text-white" >
                                <span class="plus-icon">+</span>
                            </span>
                            <img id="previewImage" class="d-none w-100 h-100 rounded-circle" alt="Preview Image" />
                            <small class="mt-2 text-muted">Upload foto profil<span class="text-danger">*</span></small>
                        </div>
                    </label>
                    <input type="file" id="profilePicture" class="d-none" accept="image/*" />
                </div>
            </div>
            <div class="form-floating mb-4">
                <input
                    type="tel"
                    class="form-control"
                    id="floatingPhone"
                    placeholder="Nomer Telepon"
                />
                <label for="floatingPhone">Nomer Telepon</label>
                <small>Contoh: https://www.instagram.com/yourusername</small>
            </div>
            <div class="form-check mb-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Dengan menekan tombol "Daftar", Saya menyetujui syarat dan ketentuan yang berlaku
            </label>
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn-secondary border-0 w-50">Daftar</button>
            </div>
        </form>
    </div>
</section>

<script>
    const profilePictureInput = document.getElementById('profilePicture');
    const uploadBox = document.getElementById('uploadBox');
    const previewImage = document.getElementById('previewImage');
    const plusIcon = document.getElementById('plusIcon');

    profilePictureInput.addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewImage.classList.remove('d-none');
                plusIcon.classList.add('d-none');
                uploadBox.style.backgroundColor = 'transparent';
                uploadBox.style.border = 'none';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
