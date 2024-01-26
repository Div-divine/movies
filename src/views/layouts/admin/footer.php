	</main>
	<script>
		function previewImage() {
			const fileInput = document.getElementById('imageFile');
			const previewContainer = document.getElementById('preview-container');
			const imagePreview = document.getElementById('image-preview');

			const file = fileInput.files[0];

			if (file) {
				const reader = new FileReader();

				reader.onload = function (e) {
					imagePreview.src = e.target.result;
					previewContainer.style.display = 'block';
				};

				reader.readAsDataURL(file);
			} else {
				previewContainer.style.display = 'none';
				imagePreview.src = '';
			}
		}
    </script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>