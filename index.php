<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & Vue.js</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    <!--Vue.js CDN-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!--Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container mt-5" id="app">
        <h2 align="center" class="pb-3">{{message}}</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" @submit="submitData" @reset="resetData">
                    <div class="form-group">
                        <label for="">ชื่อจริง</label>
                        <input type="text" v-model="form.fname" class="form-control" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="">นานสกุล</label>
                        <input type="text" v-model="form.lname" class="form-control" />
                    </div>
                    <input type="submit" v-model="form.status" class="btn btn-success" />
                    <input type="reset" value="ยกเลิก" class="btn btn-danger" />
                </form>
            </div>
        </div>
        <div class="py-4">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="row in users">
                        <td>{{row.fname}}</td>
                        <td>{{row.lname}}</td>
                        <td><button class="btn btn-info" @click="editUser(row.id)">แก้ไข</button></td>
                        <td><button class="btn btn-warning" @click="deleteUser(row.id)">ลบ</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
<!--App vue-->
<script src="app/app.js"></script>
</html>