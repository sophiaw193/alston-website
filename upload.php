<div class="uploadform">
        <h2>New Post</h2>

        <p>You must be logged in to upload a photo.</p>

        <?php echo "<form id='$show_item' class=\"uploadfile\" action=\"index.php\" method=\"post\" enctype=\"multipart/form-data\">" ?>
        <ul class="formelements">
            <li>
                <label class="upload">Upload File:</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
                <input type="file" name="gallery_image" required>
            </li>
            <li>
                <button class="button" name="submit_upload" type="submit">Upload</button>
            </li>
        </ul>
        </form>

    </div>