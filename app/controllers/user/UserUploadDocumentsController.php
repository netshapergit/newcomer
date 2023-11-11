<?php

class UserUploadDocumentsController extends UserUploadsController {

	public $alias = 'upload_documents';

	protected $storage = 'data/documents_user/';

	protected $availableExtensions = array(
		'doc',
		'docx',
		'gif',
		'jpg',
		'odt',
		'pdf',
		'png',
		'ppt',
		'pptx',
		'xls',
		'xlsx',
	);

	protected $randomName = false;

}
