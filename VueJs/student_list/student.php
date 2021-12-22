<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Insert Update Delete with Vue.js</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style>
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }

    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <div class="container" id="crudApp">
        <br />
        <h3 align="center">Student Table</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <!-- <h3 class="panel-title">Student table</h3> -->
                    </div>
                    <div class="col-md-6" align="right">
                        <input type="button" class="btn btn-success btn-xs" @click="openModel" value="Add" />
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Address</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                        <tr v-for="row in allData">
                            <td>{{ row.Name }}</td>
                            <td>{{ row.Age }}</td>
                            <td>{{ row.Sex}} </td>
                            <td>{{ row.Address }}</td>
                            <td>{{ row.Class }}</td>
                            <td>
                                <button type="button" name="edit" class="btn btn-primary btn-xs edit"
                                    @click="fetchData(row.id)">Edit</button>
                                <button type="button" name="delete" class="btn btn-danger btn-xs delete"
                                    @click="deleteData(row.id)">Delete</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div v-if="myModel">
            <transition name="model">
                <div class="modal-mask">
                    <div class="modal-wrapper">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" @click="myModel=false"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">{{ dynamicTitle }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Enter Your Name</label>
                                        <input type="text" class="form-control" v-model="Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Age</label>
                                        <input type="number" class="form-control" v-model="Age" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Gender</label>
                                        <input type="number" class="form-control" v-model="Sex" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Address</label>
                                        <input type="text" class="form-control" v-model="Address" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Class</label>
                                        <input type="varchar" class="form-control" v-model="Class" />
                                    </div>

                                    <br />
                                    <div align="center">
                                        <input type="hidden" v-model="hiddenId" />
                                        <input type="button" class="btn btn-success btn-xs" v-model="actionButton"
                                            @click="submitData" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</body>

</html>

<script>
var application = new Vue({
    el: '#crudApp',
    data: {
        allData: '',
        myModel: false,
        actionButton: 'Insert',
        dynamicTitle: 'Add Data',
    },
    methods: {
        fetchAllData: function() {
            axios.post('connect.php', {
                action: 'fetchall'
            }).then(function(response) {
                application.allData = response.data;
            });
        },
        openModel: function() {
            application.Name = '';
            application.Age = '';
            application.Sex = '';
            application.Address = '';
            application.Class = '';
            application.actionButton = "Insert";
            application.dynamicTitle = "Add Data";
            application.myModel = true;
        },
        submitData: function() {
            if (application.Name != '' && application.Age != '') {
                if (application.actionButton == 'Insert') {
                    axios.post('connect.php', {
                        action: 'insert',
                        Name: application.Name,
                        Age: application.Age,
                        Sex: application.Sex,
                        Address: application.Address,
                        Class: application.Class
                    }).then(function(response) {
                        application.myModel = false;
                        application.fetchAllData();
                        application.Name = '';
                        application.Age = '';
                        application.Sex = '';
                        application.Address = '';
                        application.Class = '';
                        alert(response.data.message);
                    });
                }
                if (application.actionButton == 'Update') {
                    axios.post('connect.php', {
                        action: 'update',
                        Name: application.Name,
                        Age: application.Age,
                        Sex: application.Sex,
                        Address: application.Address,
                        Class: application.Class,
                        hiddenId: application.hiddenId
                    }).then(function(response) {
                        application.myModel = false;
                        application.fetchAllData();
                        application.Name = '';
                        application.Age = '';
                        application.Sex = '';
                        application.Address = '';
                        application.Class = '';
                        application.hiddenId = '';
                        alert(response.data.message);
                    });
                }
            } else {
                alert("Fill All Field");
            }
        },
        fetchData: function(id) {
            axios.post('connect.php', {
                action: 'fetchSingle',
                id: id
            }).then(function(response) {
                application.Name = response.data.Name;
                application.Age = response.data.Age;
                application.Sex = response.data.Sex;
                application.Address = response.data.Address;
                application.Class = response.data.Class;
                application.hiddenId = response.data.id;
                application.myModel = true;
                application.actionButton = 'Update';
                application.dynamicTitle = 'Edit Data';
            });
        },
        deleteData: function(id) {
            if (confirm("Are you sure you want to remove this data?")) {
                axios.post('connect.php', {
                    action: 'delete',
                    id: id
                }).then(function(response) {
                    application.fetchAllData();
                    alert(response.data.message);
                });
            }
        }
    },
    created: function() {
        this.fetchAllData();
    }
});
</script>