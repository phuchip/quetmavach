<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Danh sách loại sản phẩm
            <small>Danh mục sản phẩm</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i>Danh sách loại sản phẩm</a></li>
            <li><a href=""> Danh mục sản phẩm</a></li>
        </ol>
    </section>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body ">
                    <div class="input-group " style="display: flex;width: 100%;justify-content: flex-end;">
                        <div class="input-group-append ml-2" style="margin-left: 1.5rem!important;">
                            <button style="margin-bottom: 15px;border: 1px solid #979797;background: linear-gradient(to bottom, white 0%, #dcdcdc 100%);border-radius: 5px;"><a href="/admin/add_edit_category">Thêm mới</a></button>
                        </div>
                    </div>
                    <div class="content_search">
                        <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover" id="list_category">
                            <thead style="background: #f1f4f7;">
                            <tr>
                                <th data-field="stt" data-sortable="true">ID</th>
                                <th data-field="account1" data-sortable="true">Loại sản phẩm</th>
                                <th data-field="account" data-sortable="true">Ngày thêm</th>
                                <th data-field="account2" data-sortable="true">Ngày sửa đổi</th>
                                <th data-field="account2" data-sortable="true">Trạng thái</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody class="">
                            <?php if(!empty($list_category)){
                                foreach($list_category as $list){ ?> 
                                    <tr>
                                        <td> <?=$list['id']?></td>
                                        <td><?php echo $list['name'] ?></td>
                                        <td> <?=format_date($list['created_time'])?></td>
                                        <td>
                                            <?php if ($list['modify_time'] == 0) {
                                                echo "Chưa cập nhật";
                                            }else{
                                                echo format_date($list['modify_time']);
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if ($list['status'] == 1) {?>
                                                <img src="/assets/admin/dist/img/Ellipse30.png" alt="">
                                            <?}else if($list['status'] == 0){?>
                                                <img src="/assets/admin/dist/img/Ellipse_88.png" alt="">
                                            <?} ?>
                                        </td>
                                        <td class="form-group">
                                            <a href="add_edit_category?id=<? echo $list['id'] ?>" class="btn btn-primary" style="padding: 4px 6px;"><i
                                                        class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="delete_category/<? echo $list['id'] ?>" class="btn btn-danger" style="padding: 4px 6px;" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i
                                                        class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                <?} 
                            }?> 
                            </tbody>
                        </table>
                        <div class="t_paginate">
                            <div class="t_paginate_group">  
                                    <?=$links; ?>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

