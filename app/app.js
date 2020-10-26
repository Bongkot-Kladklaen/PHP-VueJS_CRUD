
var app = new Vue({
    el:'#app',
    data:{
        users: '',
        message: 'PHP & Vue.js (Single Page Application)',
        form: {
            id: "",
            fname: "",
            lname: "",
            isEdit: false,
            status: "บันทึก"
        }
    },
    methods:{
        submitData(e){
            e.preventDefault();
            check = (this.form.fname != "" && this.form.lname != "")
            if (check && !this.form.isEdit) {
                //Record
                axios.post('controller/action.php',{
                    fname: this.form.fname,
                    lname: this.form.lname,
                    action: "insert"
                }).then(function (res) {
                    app.resetData();
                    app.getAllUsers();
                });
            }
            if (check && this.form.isEdit) {
                //Update
                axios.post('controller/action.php',{
                    id: this.form.id,
                    fname: this.form.fname,
                    lname: this.form.lname,
                    action: "update"
                }).then(function (res) {
                    app.resetData();
                    app.getAllUsers();
                });
            }
            
        },
        resetData(e){
            this.form.id = "",
            this.form.fname = "",
            this.form.lname = "",
            this.form.status = "บันทึก";
            this.form.isEdit = false;
        },
        getAllUsers(){
            axios.post('controller/action.php',{
                action: "getAll",
            }).then(function (res) {
                app.users = res.data
            });
        },
        editUser(id){
            this.form.status = "อัพเดท";
            this.form.isEdit = true;
            axios.post('controller/action.php',{
                action: "getEditUser",
                id:id
            }).then(function (res) {
                app.form.id = res.data.id;
                app.form.fname = res.data.fname;
                app.form.lname = res.data.lname;
            });
        },
        deleteUser(id){
            if (confirm("คุณต้องการลบหรือไม่")) {
                axios.post('controller/action.php',{
                    action: "getDeleteUser",
                    id:id
                }).then(function (res) {
                    app.resetData();
                    app.getAllUsers();
                });
            }
        }
    },
    created(){
        this.getAllUsers();
    }
});
