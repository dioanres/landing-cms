<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $register = [
		'username'     => 'required',
        'password'     => 'required',
        'repeat_password' => 'required|matches[password]',
        'email'        => 'required|valid_email'
	];

	public $register_errors = [
        'username' => [
            'required'    => 'You must choose a username.',
        ],
        'email'    => [
            'valid_email' => 'Please check the Email field. It does not appear to be valid.'
		],
		'repeat_password' => [
			'required' => 'The repeat password is required',
			'matches' => 'Password didnt match'
		]
	];
	
	public $login = [
		'email' => [
			'rules' => [
				'required','valid_email'
			]
			// 'errors' = [
			// 	'required' => ''
			// ]
			],
		'password' => [
			'rules' => [
				'required'
			]
		]
	];

	public $company = [
		'nama_perusahaan' => [
			'rules' => [
				'required'
			]
		],
		'deskripsi' => [
			'rules' => [
				'required'
			]
		]
	];

	public $banner = [
		'image' => [
			'rules' => [
				'required'
			],
			'errors' => [
				'required' => 'Image Belum dipilih.'
			]
		]
	];



	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
