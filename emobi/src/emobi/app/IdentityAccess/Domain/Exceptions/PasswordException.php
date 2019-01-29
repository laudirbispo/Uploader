<?php declare(strict_types=1);
namespace app\IdentityAccess\Domain\Exceptions;
/**
 * @author - Laudir Bispo, laudirbispo@outlook.com
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
use app\Shared\Contracts\TranslatableException;
use app\Shared\Exceptions\DomainDataException;

final class PasswordException extends DomainDataException implements TranslatableException
{
	private $defaultMessage = "Senha inválida";
	
	// Redefine the exception so message isn't optional
    public function __construct($message = null, $code = 0, \Exception $previous = null) 
	{   
		if (null === $message)
			$message = $this->defaultMessage;
        parent::__construct($message, $code, $previous);
    }
	
	public function getTranslateKey () : string 
	{
		return "Invalid password";
	}
}
