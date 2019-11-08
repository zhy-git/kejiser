<?php
pdo_query("	
	DROP TABLE IF EXISTS ".tablename('hcface_avatar').";
	DROP TABLE IF EXISTS ".tablename('hcface_banner').";
	DROP TABLE IF EXISTS ".tablename('hcface_cash').";
	DROP TABLE IF EXISTS ".tablename('hcface_commission').";
	DROP TABLE IF EXISTS ".tablename('hcface_goods').";
	DROP TABLE IF EXISTS ".tablename('hcface_nexus').";
	DROP TABLE IF EXISTS ".tablename('hcface_order').";
	DROP TABLE IF EXISTS ".tablename('hcface_order_unlock').";
	DROP TABLE IF EXISTS ".tablename('hcface_paylog').";
	DROP TABLE IF EXISTS ".tablename('hcface_report').";
	DROP TABLE IF EXISTS ".tablename('hcface_setting').";
	DROP TABLE IF EXISTS ".tablename('hcface_upgrade').";
	DROP TABLE IF EXISTS ".tablename('hcface_users`').";
");
