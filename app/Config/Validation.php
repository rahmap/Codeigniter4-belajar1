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

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $signup = [
		'nama'     => 'required|max_length[100]|min_length[6]|alpha_space',
		'password'     => 'required|min_length[6]',
		'password1' => 'matches[password]',
		'email'        => 'required|valid_email|is_unique[member.member_email]'
	];

	public $signup_errors = [
			'nama' => [
					'required' => 'Isi nama anda.',
			],
			'email' => [
					'valid_email' => 'Email tidak valid.'
			],
			'password1' => [
					'matches' => 'Password konfirmasi tidak sama.'
			]
	];

}
