<?php
 namespace app\admin\service; use app\common\model\GoodsSupplier; class Supplier extends Base { function __construct() { parent::__construct(); $this->supplier = new GoodsSupplier(); } public function getSupplierList($condition = '', $field = "\x2a", $order = '') { $supplier = new GoodsSupplier(); return $supplier->getQuerys($condition, $field, $order); } }
