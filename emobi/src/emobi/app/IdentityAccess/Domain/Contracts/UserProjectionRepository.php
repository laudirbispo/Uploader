<?php declare(strict_types=1);
namespace app\IdentityAccess\Domain\Contracts;
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
use app\IdentityAccess\Domain\Events\{ 
    GroupWasCreated, 
    GroupWasChanged, 
    GroupStatusWasChanged,
    AccountWasCreatedByAdmin,
    ProfileWasCreated,
    ProfileWasChanged,
    PasswordWasChanged,
    UserWasAddedToTheGroup
};

interface UserProjectionRepository 
{
    public function projectGroupWasCreated(GroupWasCreated $Event);
    public function projectGroupWasChanged(GroupWasChanged $Event);
    public function projectAccountWasCreatedByAdmin(AccountWasCreatedByAdmin $Event) : void;
    public function projectProfileWasCreated(ProfileWasCreated $Event) : void;
    public function projectProfileWasChanged(ProfileWasChanged $Event) : void;
    public function projectUserWasAddedToTheGroup(UserWasAddedToTheGroup $Event) : void;
    public function projectPasswordWasChanged(PasswordWasChanged $Event) : void;
}