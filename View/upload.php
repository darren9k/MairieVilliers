<?php
		if (isset($_POST['upload_photo'])) {
			if(isset($_FILES['photo']) && $_FILES ['photo']['error'] === UPLOAD_ERR_OK){
				$fileTmpPath = $_FILES['photo']['tmp_name'];
				$fileName = $_FILES['photo']['name'];
				$fileSize = $_FILES['photo']['size'];
				$fileType = $_FILES['photo']['type'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));

				$newFileName = md5(time() . $fileName) . '.' . $fileExtension;

				$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

				if (in_array($fileExtension, $allowedfileExtensions)) {
					$uploadFileDir = 'img/img_user';
					$dest_path = $uploadFileDir . $newFileName;
					if(move_uploaded_file($fileTmpPath, $dest_path))
					{
  						echo 'File is successfully uploaded.';
					}
					else
						{
  							echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
						}

				}
			}

		
		}

			
		?>