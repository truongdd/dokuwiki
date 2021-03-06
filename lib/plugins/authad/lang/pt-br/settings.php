<?php
/**
 * Brazilian Portuguese language file
 *
 * @author Victor Westmann <victor.westmann@gmail.com>
 * @author Frederico Guimarães <frederico@teia.bio.br>
 */
$lang['account_suffix']        = 'Sufixo de sua conta. Eg. <code>@meu.domínio.org</code>';
$lang['base_dn']               = 'Sua base DN. Eg. <code>DC=meu,DC=domínio,DC=org</code>';
$lang['domain_controllers']    = 'Uma lista de controles de domínios separada por vírgulas. Eg. <code>srv1.domínio.org,srv2.domínio.org</code>';
$lang['admin_username']        = 'Um usuário do Active Directory com privilégios para acessar os dados de todos os outros usuários. Opcional, mas necessário para realizar certas ações, tais como enviar mensagens de assinatura.';
$lang['admin_password']        = 'A senha do usuário acima.';
$lang['sso']                   = 'Usar Single-Sign-On através do Kerberos ou NTLM?';
$lang['real_primarygroup']     = 'O grupo primário real deve ser resolvido ao invés de assumirmos como "Usuários do Domínio" (mais lento)';
$lang['use_ssl']               = 'Usar conexão SSL? Se usar, não habilitar TLS abaixo.';
$lang['use_tls']               = 'Usar conexão TLS? se usar, não habilitar SSL acima.';
$lang['debug']                 = 'Mostrar saída adicional de depuração em mensagens de erros?';
$lang['expirywarn']            = 'Dias com antecedência para avisar o usuário de uma senha que vai expirar. 0 para desabilitar.';
$lang['additional']            = 'Uma lista separada de vírgulas de atributos adicionais AD para pegar dados de usuários. Usados por alguns plugins.';
