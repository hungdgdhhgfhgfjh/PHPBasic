<h1 class="text-center text-warning">Update</h1>
<div style="height: 503px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">book Name</label>
                <input type="text"  class="form-control" value="<?=$book->book_name;?>"  name="book_name">
                <strong class="alert-danger"  style="color:red"></strong>
            </div>
            <div class="form-group">
                <label for="email">Image Book</label>
                <input type="text"  class="form-control" value="<?=$book->image_book;?>"  name="image_book">
                <strong class="alert-danger"  style="color:red"></strong>
            </div>
            <div class="form-group">
                <label for="email">Category Book</label>
               <select name="categorybooks_id" id="">
                   <option value="3">sách học sinh</option>
                   <option value="4">sách cuộc sống</option>
               </select>
                <strong class="alert-danger"  style="color:red"></strong>
            </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
        </form>
    </div>
   