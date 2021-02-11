<body>
        <form class="container" action="insert-book.php" method="post">
            <div class="form-group">
                <label for="titel">titel</label>
                <input class="form-control" type="text" name="titel" require><br>
            </div>
            <div class="form-group">
                <label for="schrijver">schrijver</label>
                <input class="form-control" type="text" name="schrijver" require><br>
            </div>
            <div class="form-group">
                <label for="taal">taal</label>
                <input class="form-control" type="text" name="taal" require><br>
            </div>
            <div class="form-group">
                <label for="paginas">paginas</label>
                <input class="form-control" type="number" name="paginas" require><br>

                <label for="cover">cover</label>
                <input class="form-control" type="text" name="cover" require><br>

                <label for="uitgever">uitgever</label>
                <input class="form-control" type="text" name="uitgever" require><br>

                <label for="genre">genre</label>
                <input class="form-control" type="text" name="genre" require><br>

                <label for="releaseday">releaseday</label>
                <input class="form-control" type="text" name="releaseday" require><br>

                <label for="image">image (relative path)!</label>
                <input class="form-control" type="text" name="image" require><br>
            </div>
            <input class="btn btn-primary" type="submit" name="submit">
        </form>
</body>