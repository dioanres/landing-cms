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
        'password'     => 'required|min_length[6]',
        'repeat_password' => 'required|matches[password]',
        'email'        => 'required|valid_email|is_unique[cms_users.email]'
	];

	public $register_errors = [
        'username' => [
            'required'    => 'Username wajib di isi.',
        ],
        'email'    => [
			'is_unique' => 'Email Sudah terdaftar.',
            'valid_email' => 'Format Email tidak sesuai.',
		],
		[
		'password' => [
				'min_length' => 'Panjang password harus lebih dari 6 karakter.',
			]
		],
		'repeat_password' => [
			'required' => 'The repeat password is required',
			'matches' => 'Password tidak sesuai'
		]
	];

	public $update_user = [
		'username'     => 'required',
	];

	public $update_user_errors = [
        'username' => [
            'required'    => 'Username wajib di isi.',
        ],
	];

	public $update_password = [
		'username'     => 'required',
        'password'     => 'min_length[6]',
        'repeat_password' => 'required_with[password]|matches[password]',
	];

	public $update_password_errors = [
        'username' => [
            'required'    => 'Username wajib di isi.',
        ],
		[
		'password' => [
				'min_length' => 'Panjang password harus lebih dari 6 karakter.',
			]
		],
		'repeat_password' => [
			'required' => 'The repeat password is required',
			'matches' => 'Password tidak sesuai'
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
