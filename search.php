header('Content-Type: application/json');
 
echo json_encode(array(
    "status" => true,
    "error"  => null,
    "data"   => array(
        "Alumnos"   => array(
            "Tutores"   => array(
                "Juan Ramon", "Doña Florinda"
            ),
            
            )
        )
    )
));