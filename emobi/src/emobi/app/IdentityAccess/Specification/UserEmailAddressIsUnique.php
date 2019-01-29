<?php declare(strict_types=1);
namespace app\IdentityAccess\Specification;
/**
 * @author - Laudir Bispo, laudirbispo@outlook.com
 * @copyright - 2018
 *
 * AVISO DE LICENÇA
 * 
 * @license - Em hipótese alguma é permitido ao LICENCIADO ou a terceiros, de forma geral:
 * Copiar, ceder, sublicenciar, vender, dar em locação ou em garantia, reproduzir, doar, 
 * alienar de qualquer forma, transferir total ou parcialmente, sob quaisquer modalidades, gratuita ou onerosamente, 
 * provisória ou permanentemente, o SOFTWARE objeto deste EULA, assim como seus módulos, partes,  
 * manuais ou quaisquer informações relativas ao mesmo;
 * Retirar ou alterar, total ou parcialmente, os avisos de reserva de direito existente no SOFTWARE e na documentação;
 * Praticar de engenharia reversa, descompilação ou desmontagem do SOFTWARE.
 * Estando totalmente sujeito a suspensão imediata da utilização do software e cancelamento do período de contratação, 
 * sem quaisquer restituições contratuais por parte da LICENCIANTE.  
 *
 */
use app\Shared\Contracts\Specification;
use app\IdentityAccess\Domain\Contracts\UserQueryRepository;
use app\Shared\Models\EmailAddress;

final class UserEmailAddressIsUnique implements Specification 
{
	/**
	 * @instance of implementing a query repository UserQueryRepository
	 */
	private $userQueryRepository;
	
	public function __construct (UserQueryRepository $UserQueryRepository)
	{
		$this->userQueryRepository = $UserQueryRepository;
	}
	
	/**
	 * return true if email is not registered
	 */
	public function isSatisfiedBy($emailAddress) : bool 
	{
		return ($this->userQueryRepository->accountExistsWithEmail($emailAddress)) ? false : true;
	}
	
}