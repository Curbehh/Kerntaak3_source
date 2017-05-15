<?php
                            if ($ticket == 'Vrijdag'){

                                $mail->addAttachment('streepjescodes/ticketvrijdag.pdf');

                            }

                            if ($ticket == 'Zaterdag'){

                                $mail->addAttachment('streepjescodes/ticketzaterdag.pdf');

                            }

                            if ($ticket == 'Zondag'){

                                $mail->addAttachment('streepjescodes/ticketzondag.pdf');

                            }

                            if ($ticket == 'Weekend'){

                                $mail->addAttachment('streepjescodes/ticketweekend.pdf');

                            }

                            if ($ticket == 'Passe-partout'){

                                $mail->addAttachment('streepjescodes/ticketpassepartout.pdf');

                            }
                        
                            if ($maaltijd == 'Lunch'){
                                
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Lunch, Lunch'){
                                
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                
                            } 
                        
                            if ($maaltijd == 'Lunch, Lunch, Lunch'){
                                
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Diner'){
                                
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Diner, Diner'){
                                
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                
                            } 
                        
                            if ($maaltijd == 'Diner, Diner, Diner'){
                                
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Lunch, Diner'){
                                
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Diner, Lunch'){
                                
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Lunch, Diner, Diner'){
                                
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Lunch, Lunch, Diner'){
                                
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Diner, Diner, Lunch'){
                                
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                
                            }
                        
                            if ($maaltijd == 'Diner, Lunch, Lunch'){
                                
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                
                            }

                            if ($maaltijd == 'Lunch en Diner'){

                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');

                            }
                        
                            if ($maaltijd == 'Lunch en Diner, Lunch en Diner'){

                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');

                            }
                        
                            if ($maaltijd == 'Lunch en Diner, Lunch en Diner, Lunch en Diner'){

                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');
                                $mail->addAttachment('streepjescodes/maaltijdlunch.pdf');
                                $mail->addAttachment('streepjescodes/maaltijddiner.pdf');

                            }

?>