<?php

class getUser{

    public function getNit($nit){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();



        $sql="SELECT * FROM tienda WHERE nit=:nit";
        $result=$consulta->prepare($sql);
        $result->bindParam(':nit',$nit);

        $result->execute();
        
       while($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;
        
    }
    public function getEmail($email){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();



        $sql="SELECT * FROM tienda WHERE email=:email";
        $result=$consulta->prepare($sql);
        $result->bindParam(':email',$email);

        $result->execute();
        
       while($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;
        
    }
    public function getCellphone($cellphone){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();



        $sql="SELECT * FROM tienda WHERE cellphone=:cellphone";
        $result=$consulta->prepare($sql);
        $result->bindParam(':cellphone',$cellphone);

        $result->execute();
        
       while($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;
        
    }


    public function getUsuarios($email){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();



        $sql="SELECT * FROM login WHERE email=:email";
        $result=$consulta->prepare($sql);
        $result->bindParam(':email',$email);

        $result->execute();
        
       while($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;
        
    }

    public function getUsuariosTwo($document){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();



        $sql="SELECT * FROM login WHERE documento=:document";
        $result=$consulta->prepare($sql);
        $result->bindParam(':document',$document);

        $result->execute();
        
       while($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;
        
    }

    public function inserUsuarios($name,$tipo,$documento,$email,$pass,$cel,$address){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();



        $sql="INSERT INTO login (name,tipo,documento,email,pass,cel,address) VALUES (:name,:tipo,:documento,:email,:pass,:cel,:address)";
        $result=$consulta->prepare($sql);
        $result->bindParam(':name',$name);
        $result->bindParam(':tipo',$tipo);
        $result->bindParam(':documento',$documento);
        $result->bindParam(':email',$email);
        $result->bindParam(':pass',$pass);
        $result->bindParam(':cel',$cel);
        $result->bindParam(':address',$address);

        if(!$result){

                echo "<script>
                        alert('fallo');
                        location.href='../../index.php';
                </script>";
                $vista = "Fallo al registrar_../view/supervisorGeneral.php";
		

        }else{

            $result->execute();
                
               
            
                $vista = "registro exitoso_../view/supervisorGeneral.php";
		
             

        }
        return $vista;
        
       
        
    }

    public function inserTienda($nit,$name,$municipality,$address,$email,$cellphone){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();



        $sql="INSERT INTO tienda (name,tipo,documento,email,pass,cel,address) VALUES (:name,:tipo,:documento,:email,:pass,:cel,:address)";
        $result=$consulta->prepare($sql);
        $result->bindParam(':name',$name);
        $result->bindParam(':tipo',$tipo);
        $result->bindParam(':documento',$documento);
        $result->bindParam(':email',$email);
        $result->bindParam(':pass',$pass);
        $result->bindParam(':cel',$cel);
        $result->bindParam(':address',$address);

        if(!$result){

                echo "<script>
                        alert('fallo');
                        location.href='../../index.php';
                </script>";
                $vista = "Fallo al registrar_../view/supervisorGeneral.php";
		

        }else{

            $result->execute();
                
               
            
                $vista = "registro exitoso_../view/supervisorGeneral.php";
		
             

        }
        return $vista;
        
       
        
    }
}
