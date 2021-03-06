<?php if (!defined('THINK_PATH')) exit();?><form class="sui-form form-dark">
  <label for="">父分类：</label>
  <span class="sui-dropdown dropdown-bordered select">
    <span class="dropdown-inner">
      <a role="button" href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle">
      <input value="" name="fufenlei" type="hidden" id="addfufenlei">
      <i class="caret"></i><span>选择分类</span></a>
  <ul role="menu" aria-labelledby="drop4" class="sui-dropdown-menu">
    <?php if(is_array($fudata)): foreach($fudata as $key=>$fudata): ?><li role="presentation" data-id="<?php echo ($fudata["id"]); ?>" class="fuselect">
        <a role="menuitem" tabindex="-1" href="javascript:void(0);" value="<?php echo ($fudata["name"]); ?>"><?php echo ($fudata["name"]); ?></a>
      </li><?php endforeach; endif; ?>
  </ul>
  </span>
  </span>
  <label for="">子分类：</label>
  <span class="sui-dropdown dropdown-bordered select">
    <span class="dropdown-inner">
      <a role="button" href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle">
      <input value="" name="zifenlei" type="hidden" id="addzifenlei">
      <i class="caret"></i><span>选择子分类</span></a>
  <ul role="menu" aria-labelledby="drop4" class="sui-dropdown-menu" id="selectzifenlei">
  </ul>
  </span>
  </span>
  &nbsp;&nbsp;
  <button type="button" class="sui-btn btn-primary" id="">搜索</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label for="">菜谱id</label>
  <div class="input-control control-right">
    <input type="text" name=""><i class="sui-icon icon-touch-magnifier"></i>
  </div>
  &nbsp;&nbsp;
  <button type="button" class="sui-btn btn-primary" id="">搜索</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label for="">菜谱名称：</label>
  <div class="input-control control-right">
    <input type="text" name=""><i class="sui-icon icon-touch-magnifier"></i>
  </div>
  &nbsp;&nbsp;
  <button type="button" class="sui-btn btn-primary" id="">搜索</button>
</form>
<div style="width:800px;">
  <table class="sui-table table-bordered">
    <thead>
      <tr>
        <th>菜品id</th>
        <th>菜品名称</th>
        <th>子分类名称</th>
        <th>单价</th>
        <th>状态</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($data)): foreach($data as $key=>$data): ?><tr>
          <td><?php echo ($data["id"]); ?></td>
          <td><a href="#"><?php echo ($data["cname"]); ?></a></td>
          <td><?php echo ($data["name"]); ?></td>
          <td><?php echo ($data["newprice"]); ?>/份</td>
          <td class="caipin-status" data-status="<?php echo ($data["cstatus"]); ?>"><?php echo ($data["cstatus"]); ?></td>
          <td>
            <button data-target="#orderfood-modal" data-keyboard="false" class="sui-btn btn-lg order-food" data-id="<?php echo ($data["id"]); ?>">预定</button>
          </td>
        </tr><?php endforeach; endif; ?>
    </tbody>
  </table>
</div>
<!-- Modal-->
<div id="orderfood-modal" tabindex="-1" role="dialog" data-hasfoot="false" class="sui-modal hide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
        <h4 id="myModalLabel" class="modal-title">加入购物车</h4>
      </div>
      <div class="modal-body" style="height:130px;">
        <!-- 弹窗内容 -->
        <form class="sui-form sui-validate myform" id="">
          <div class="control-group">
            <label for="">请填写数量： </label>
            <div class="controls">
              <input type="text" class="input-xlarge input-fat" data-rules="required|minlength=3|maxlength=8" name="">
            </div>
          </div>
          <div class="control-group">
            <label for="">请填写备注： </label>
            <div class="controls">
              <input type="text" class="input-xlarge input-fat" data-rules="required|minlength=3|maxlength=8" name="">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" data-ok="modal" class="sui-btn btn-primary btn-large" id="">确定</button>
        <button type="button" data-dismiss="modal" class="sui-btn btn-default btn-large">取消</button>
      </div>
    </div>
  </div>
</div>

<script>

  $(".caipin-status").each(function() {
    if ($(this).attr("data-status") == 0) {
      $(this).parent().find(".order-food").addClass("disabled");
    } else {
      $(this).parent().find(".order-food").attr({
        "data-toggle": "modal"
      });
    }
  });
</script>