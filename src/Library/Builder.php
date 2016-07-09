<?php
namespace Library;

class Builder {
	private $build = "";

	public function setBuild(Decorator $data) {
		$this->build .= $data->getData();
		return $this;
	}

	public function getBuild() {
		return $this->build;
	}
}