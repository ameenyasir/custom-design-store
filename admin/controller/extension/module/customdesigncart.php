<?php
class ControllerExtensionModuleCustomDesignCart extends Controller {
	private $error = array();
	
	public function install() {
		
		$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."product_custom_config` (
			`product_custom_id` int NOT NULL AUTO_INCREMENT,
			`product_id` int NOT NULL,
			`custom_data` json NOT NULL,
			`restrict_text_size` tinyint NOT NULL,
			`restrict_text_rotation` tinyint NOT NULL,
			`restrict_text_position` tinyint NOT NULL,
			`restrict_text_font` tinyint NOT NULL,
			`restrict_image_upload` tinyint NOT NULL,
			`restrict_image_rotation` tinyint NOT NULL,
			`restrict_image_position` tinyint NOT NULL,
			PRIMARY KEY (`product_custom_id`),
			KEY `product_id` (`product_id`)
		)");

		$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."order_custom` (
			`order_custom_id` int NOT NULL AUTO_INCREMENT,
			`order_id` int NOT NULL,
			`order_product_id` int NOT NULL,
			`custom_data` json NOT NULL,
			PRIMARY KEY (`order_custom_id`),
			KEY `order_id` (`order_id`),
			KEY `order_product_id` (`order_product_id`)
		)");

		$custom_data = $this->db->query("SHOW COLUMNS FROM `".DB_PREFIX."cart` LIKE 'custom_data'");
		if(!$custom_data->num_rows) {
			$this->db->query("ALTER TABLE `".DB_PREFIX."cart` ADD `custom_data` json NOT NULL AFTER `option`");
		}
		
	}

	public function index() {
		$this->install();
		$this->load->language('extension/module/customdesigncart');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_customdesigncart', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/customdesigncart', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/customdesigncart', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_customdesigncart_status'])) {
			$data['module_customdesigncart_status'] = $this->request->post['module_customdesigncart_status'];
		} else {
			$data['module_customdesigncart_status'] = $this->config->get('module_customdesigncart_status');
		}

		if (isset($this->request->post['module_customdesigncart_iframe_url'])) {
			$data['module_customdesigncart_iframe_url'] = $this->request->post['module_customdesigncart_iframe_url'];
		} else {
			$data['module_customdesigncart_iframe_url'] = $this->config->get('module_customdesigncart_iframe_url');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/customdesigncart', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/customdesigncart')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
