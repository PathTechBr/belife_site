<?php

/**
 * This example shows sending a message using PHP's mail() function.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';


// Check for empty fields
if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['message'])
) {
    echo "No arguments Provided!";
    return false;
}

$name = explode("name,", $_POST['name'])[0];
$email = explode("email,", $_POST['email'])[0];
if (!empty($_POST['fone'])) {
    $fone = explode("fone,", $_POST['fone'])[0];
} else {
    $fone = 'N/A';
}

$message = explode("message,", $_POST['message'])[0];

//Create a new PHPMailer instance
$mail = new PHPMailer;
try {
    //Server settings
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.zoho.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply_plcondominial@zohomail.com';                     // SMTP username
    $mail->Password   = 'careca165032';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    // $mail->SMTPDebug = 2;
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply_plcondominial@zohomail.com', 'No-reply');
    $mail->addAddress('rafael.bahia@pathtech.com.br', 'Rafael Bahia');     // Add a recipient
    //    $mail->addAddress('contato@plcondominial.com.br', 'Contato');     // Add a recipient
    //    $mail->addAddress('pietro@plcondominial.com.br', 'Pietro Lucciola');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contato pelo Site';
    $mail->AddEmbeddedImage('../assets/images/1652326451886.png', 'logo_belife');

    $site_name = 'BeLife';
    $link = 'http://belife.ind.br/';

    $structure = '<!DOCTYPE html>
    <html>
    <head>
       <title></title>
    </head>
    <body>
       <div class="m_4153797198980295853container" style="background-color:#fff">
          <div style="Margin:0px auto;max-width:600px">
             <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                <tbody>
                   <tr>
                      <td style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                         <div class="m_4153797198980295853mj-column-per-100"
                            style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                               <tbody>
                                  <tr>
                                     <td style="vertical-align:top;padding:0">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                           width="100%">
                                           <tbody>
                                              <tr>
                                                 <td style="font-size:0px;padding:0;word-break:break-word">
                                                    <div style="height:30px"> </div>
                                                 </td>
                                              </tr>
                                           </tbody>
                                        </table>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                      </td>
                   </tr>
                </tbody>
             </table>
          </div>
          <div style="Margin:0px auto;max-width:600px">
             <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                <tbody>
                   <tr>
                      <td style="direction:ltr;font-size:0px;padding:20px;text-align:center;vertical-align:top">
                         <div style="Margin:0px auto;max-width:560px; background-color: black">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-25"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td align="left"
                                                                   style="font-size:0px;padding:0;word-break:break-word; background-color: #a6c4da;">
                                                                   <table border="0" cellpadding="0"
                                                                      cellspacing="0"
                                                                      role="presentation"
                                                                      style="border-collapse:collapse;border-spacing:0px">
                                                                      <tbody>
                                                                         <tr>
                                                                            <td style="width:140px">
                                                                               <img height="auto"
                                                                                  src="cid:logo_belife" alt="Path Tech Logo"
                                                                                  style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%"
                                                                                  width="140"
                                                                                  class="CToWUd">
                                                                            </td>
                                                                         </tr>
                                                                      </tbody>
                                                                   </table>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                        <div class="m_4153797198980295853mj-column-per-25"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%"></table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                        <div class="m_4153797198980295853mj-column-per-25"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%"></table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                        <div class="m_4153797198980295853mj-column-per-25"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%"></table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                      </td>
                   </tr>
                </tbody>
             </table>
          </div>
          <div class="m_4153797198980295853content-wrapper"
             style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px">
             <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                style="background:#ffffff;background-color:#ffffff;width:100%">
                <tbody>
                   <tr>
                      <td style="direction:ltr;font-size:0px;padding:0 20px;text-align:center;vertical-align:top">
                         <div style="Margin:0px auto;max-width:560px;">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div style="height:30px"> </div>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div class="m_4153797198980295853header-section" style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0 6px;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td align="left"
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div
                                                                      style="font-family:HelveticaNeue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                                                      <span
                                                                         class="m_4153797198980295853text"
                                                                         style="color:#2a2a2a;font-size:14px;line-height:19px;letter-spacing:0.5px;font-family:HelveticaNeue-Light,HelveticaNeue,Helvetica,Arial,sans-serif"><strong
                                                                         style="color:#6f6f6f">' . $name . '</strong> acabou
                                                                      de enviar um novo formulario
                                                                      Contato</span>
                                                                   </div>
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                                <td align="left"
                                                                   style="font-size:0px;padding:0;padding-top:3px;word-break:break-word">
                                                                   <div
                                                                      style="font-family:HelveticaNeue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                                                      <span
                                                                         class="m_4153797198980295853text m_4153797198980295853subtitle"
                                                                         style="font-size:12px;color:#20455e;line-height:18px;letter-spacing:0.3px">em</span>
                                                                      <span
                                                                         class="m_4153797198980295853text m_4153797198980295853subtitle"
                                                                         style="font-size:12px;color:#20455e;line-height:18px;letter-spacing:0.3px"><a
                                                                         href="' . $link . '"
                                                                         target="_blank"
                                                                         data-saferedirecturl="' . $link . '">' . $site_name . '</a></span>
                                                                   </div>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div style="height:40px"> </div>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td
                                                       style="background-color:#f0f4f7;border-radius:36px;vertical-align:top;padding:25px">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td align="left"
                                                                   class="m_4153797198980295853bubble-text"
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div
                                                                      style="font-family:HelveticaNeue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                                                      <span
                                                                         class="m_4153797198980295853text"
                                                                         style="white-space:pre-wrap;font-size:16px;line-height:32px;color:#474747">Nome:</span>
                                                                      <span
                                                                         class="m_4153797198980295853text"
                                                                         style="white-space:pre-wrap;font-family:HelveticaNeue-Light,HelveticaNeue,Helvetica,Arial,sans-serif;font-size:16px;line-height:32px;color:#474747">' . $name . '</span>
                                                                   </div>
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                                <td align="left"
                                                                   class="m_4153797198980295853bubble-text"
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div
                                                                      style="font-family:HelveticaNeue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                                                      <span
                                                                         class="m_4153797198980295853text"
                                                                         style="white-space:pre-wrap;font-size:16px;line-height:32px;color:#474747">Email:</span>
                                                                      <span
                                                                         class="m_4153797198980295853text"
                                                                         style="white-space:pre-wrap;font-family:HelveticaNeue-Light,HelveticaNeue,Helvetica,Arial,sans-serif;font-size:16px;line-height:32px;color:#474747"><a
                                                                         href="mailto:' . $email . ' "
                                                                         style="color:#1f77ff"
                                                                         target="_blank">' . $email . '</a></span>
                                                                   </div>
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                                <td align="left"
                                                                   class="m_4153797198980295853bubble-text"
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div
                                                                      style="font-family:HelveticaNeue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                                                      <span
                                                                         class="m_4153797198980295853text"
                                                                         style="white-space:pre-wrap;font-size:16px;line-height:32px;color:#474747">Telefone:</span>
                                                                      <span
                                                                         class="m_4153797198980295853text"
                                                                         style="white-space:pre-wrap;font-family:HelveticaNeue-Light,HelveticaNeue,Helvetica,Arial,sans-serif;font-size:16px;line-height:32px;color:#474747">' . $fone . '</span>
                                                                   </div>
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                                <td align="left" class="m_4153797198980295853bubble-text"style="font-size:0px;padding:0;word-break:break-word">
                                                                    <div style="font-family:HelveticaNeue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                                                        <span class="m_4153797198980295853text" style="white-space:pre-wrap;font-size:16px;line-height:32px;color:#474747">Assunto:</span>
                                                                        <span class="m_4153797198980295853text" style="white-space:pre-wrap;font-family:HelveticaNeue-Light,HelveticaNeue,Helvetica,Arial,sans-serif;font-size:16px;line-height:32px;color:#474747">Contato - Site</span>
                                                                    </div>
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                                <td align="left" class="m_4153797198980295853bubble-text" style="font-size:0px;padding:0;word-break:break-word">
                                                                    <div style="font-family:HelveticaNeue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                                                        <span class="m_4153797198980295853text" style="white-space:pre-wrap;font-size:16px;line-height:32px;color:#474747">Mensagem:</span>
                                                                        <span class="m_4153797198980295853text" style="white-space:pre-wrap;font-family:HelveticaNeue-Light,HelveticaNeue,Helvetica,Arial,sans-serif;font-size:16px;line-height:32px;color:#474747">"' . $message . '"</span>
                                                                    </div>
                                                                </td>
                                                             </tr>

                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div style="height:30px"> </div>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div style="height:30px"> </div>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <p
                                                                      style="border-top:solid 1px #bac0c5;font-size:1;margin:0px auto;width:100%"></p>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div style="height:15px"> </div>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div style="Margin:0px auto;max-width:560px">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="width:100%">
                               <tbody>
                                  <tr>
                                     <td
                                        style="direction:ltr;font-size:0px;padding:0;text-align:center;vertical-align:top">
                                        <div class="m_4153797198980295853mj-column-per-100"
                                           style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                           <table border="0" cellpadding="0" cellspacing="0"
                                              role="presentation" width="100%">
                                              <tbody>
                                                 <tr>
                                                    <td style="vertical-align:top;padding:0">
                                                       <table border="0" cellpadding="0" cellspacing="0"
                                                          role="presentation" width="100%">
                                                          <tbody>
                                                             <tr>
                                                                <td
                                                                   style="font-size:0px;padding:0;word-break:break-word">
                                                                   <div style="height:30px"> </div>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                      </td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </body>
 </html>
';
    $mail->Body = $structure;

    if ($mail->send()) {
        echo 'Message has been sent';
    } else {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
