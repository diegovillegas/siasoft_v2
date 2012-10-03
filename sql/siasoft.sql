-- Adminer 3.6.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE `articulo` (
  `ARTICULO` varchar(20) NOT NULL,
  `NOMBRE` varchar(128) NOT NULL,
  `ORIGEN_CORP` varchar(1) NOT NULL COMMENT 'Origen Corporativo [T]erceros o [C]orporativo',
  `CLASE_ABC` varchar(1) DEFAULT NULL COMMENT 'clase A o B o C o D',
  `TIPO_ARTICULO` int(11) NOT NULL,
  `TIPO_COD_BARRAS` varchar(10) DEFAULT NULL,
  `CODIGO_BARRAS` varchar(20) DEFAULT NULL,
  `EXISTENCIA_MINIMA` decimal(28,8) NOT NULL,
  `EXISTENCIA_MAXIMA` decimal(28,8) NOT NULL,
  `PUNTO_REORDEN` decimal(28,8) NOT NULL,
  `COSTO_FISCAL` varchar(10) DEFAULT NULL,
  `COSTO_ESTANDAR` decimal(28,8) NOT NULL,
  `COSTO_PROMEDIO` decimal(28,8) NOT NULL,
  `COSTO_ULTIMO` decimal(28,8) NOT NULL,
  `PRECIO_BASE` decimal(28,8) NOT NULL,
  `DESCRIPCION_COMPRA` varchar(128) DEFAULT NULL,
  `IMPUESTO_COMPRA` varchar(4) DEFAULT NULL,
  `BODEGA` varchar(4) DEFAULT NULL,
  `IMP1_AFECTA_COSTO` varchar(1) DEFAULT NULL COMMENT 'Impuesto 1 Afecta el costo S o N',
  `RETENCION_COMPRA` varchar(4) DEFAULT NULL,
  `NOTAS` text,
  `FRECUENCIA_CONTEO` smallint(6) NOT NULL,
  `PESO_NETO` decimal(28,8) NOT NULL,
  `PESO_NETO_UNIDAD` int(11) NOT NULL,
  `PESO_BRUTO` decimal(28,8) NOT NULL,
  `PESO_BRUTO_UNIDAD` int(11) NOT NULL,
  `VOLUMEN` decimal(28,8) NOT NULL,
  `VOLUMEN_UNIDAD` int(11) NOT NULL,
  `UNIDAD_ALMACEN` int(11) NOT NULL,
  `UNIDAD_EMPAQUE` int(11) NOT NULL,
  `UNIDAD_VENTA` int(11) NOT NULL,
  `FACTOR_EMPAQUE` decimal(28,8) NOT NULL,
  `FACTOR_VENTA` decimal(28,8) NOT NULL,
  `IMPUESTO_VENTA` varchar(4) NOT NULL,
  `RETENCION_VENTA` varchar(4) DEFAULT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ARTICULO`),
  KEY `FK_BODEGA_DEFECTO_ARTICULO` (`BODEGA`),
  KEY `FK_COSTO_FISCAL_ARTICULO` (`COSTO_FISCAL`),
  KEY `FK_IMPUESTO_DE_COMPRA` (`IMPUESTO_COMPRA`),
  KEY `FK_IMPUESTO_VENTA_ARTICULO` (`IMPUESTO_VENTA`),
  KEY `FK_PESO_BRUTO_UND_ARTICULO` (`PESO_BRUTO_UNIDAD`),
  KEY `FK_PESO_NETO_UND_ARTICULO` (`PESO_NETO_UNIDAD`),
  KEY `FK_RETENCION_COMPRA_ARTICULO` (`RETENCION_COMPRA`),
  KEY `FK_RETENCION_VENTA_ARTICULO` (`RETENCION_VENTA`),
  KEY `FK_TIPO_DE_ARTICULO` (`TIPO_ARTICULO`),
  KEY `FK_UNIDAD_ALMACEN_ARTICULO` (`UNIDAD_ALMACEN`),
  KEY `FK_UNIDAD_EMPAQUE_ARTICULO` (`UNIDAD_EMPAQUE`),
  KEY `FK_UNIDAD_VENTA_ARTICULO` (`UNIDAD_VENTA`),
  KEY `FK_VOLUMEN_UND_ARTICULO` (`VOLUMEN_UNIDAD`),
  CONSTRAINT `FK_BODEGA_DEFECTO_ARTICULO` FOREIGN KEY (`BODEGA`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_COSTO_FISCAL_ARTICULO` FOREIGN KEY (`COSTO_FISCAL`) REFERENCES `metodo_valuacion_inv` (`ID`),
  CONSTRAINT `FK_IMPUESTO_DE_COMPRA` FOREIGN KEY (`IMPUESTO_COMPRA`) REFERENCES `impuesto` (`ID`),
  CONSTRAINT `FK_IMPUESTO_VENTA_ARTICULO` FOREIGN KEY (`IMPUESTO_VENTA`) REFERENCES `impuesto` (`ID`),
  CONSTRAINT `FK_PESO_BRUTO_UND_ARTICULO` FOREIGN KEY (`PESO_BRUTO_UNIDAD`) REFERENCES `unidad_medida` (`ID`),
  CONSTRAINT `FK_PESO_NETO_UND_ARTICULO` FOREIGN KEY (`PESO_NETO_UNIDAD`) REFERENCES `unidad_medida` (`ID`),
  CONSTRAINT `FK_RETENCION_COMPRA_ARTICULO` FOREIGN KEY (`RETENCION_COMPRA`) REFERENCES `retencion` (`ID`),
  CONSTRAINT `FK_RETENCION_VENTA_ARTICULO` FOREIGN KEY (`RETENCION_VENTA`) REFERENCES `retencion` (`ID`),
  CONSTRAINT `FK_TIPO_DE_ARTICULO` FOREIGN KEY (`TIPO_ARTICULO`) REFERENCES `tipo_articulo` (`ID`),
  CONSTRAINT `FK_UNIDAD_ALMACEN_ARTICULO` FOREIGN KEY (`UNIDAD_ALMACEN`) REFERENCES `unidad_medida` (`ID`),
  CONSTRAINT `FK_UNIDAD_EMPAQUE_ARTICULO` FOREIGN KEY (`UNIDAD_EMPAQUE`) REFERENCES `unidad_medida` (`ID`),
  CONSTRAINT `FK_UNIDAD_VENTA_ARTICULO` FOREIGN KEY (`UNIDAD_VENTA`) REFERENCES `unidad_medida` (`ID`),
  CONSTRAINT `FK_VOLUMEN_UND_ARTICULO` FOREIGN KEY (`VOLUMEN_UNIDAD`) REFERENCES `unidad_medida` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='almacena los artiuculos del inventario';


DROP TABLE IF EXISTS `articulo_multimedia`;
CREATE TABLE `articulo_multimedia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ARTICULO` varchar(20) NOT NULL,
  `TIPO` varchar(3) NOT NULL COMMENT '[IMG] Imagen   --> por ahora esta sera la unica opcion\n            [VID] Video\n            [SWF] Flash\n            [HTML5]  HTML 5',
  `UBICACION` varchar(128) NOT NULL COMMENT 'Ruta donde esta ubicado el recurso, url interna o externa',
  `NOMBRE` varchar(64) DEFAULT NULL COMMENT 'Nombre del recurso',
  `DESCRIPCION` text COMMENT 'Descripcion del recurso',
  `ORDEN` smallint(6) NOT NULL COMMENT 'Orden del recurso dentro de todo el listado de recursos asociados al articulo',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_IMAGEN_ARTICULO` (`ARTICULO`),
  CONSTRAINT `FK_IMAGEN_ARTICULO` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Relaciona los articulos con la ubicacion de archivos multime';


DROP TABLE IF EXISTS `articulo_proveedor`;
CREATE TABLE `articulo_proveedor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ARTICULO` varchar(20) NOT NULL,
  `PROVEEDOR` varchar(20) NOT NULL,
  `CODIGO_CATALOGO` varchar(20) NOT NULL COMMENT 'Codigo interno que maneja el proveedor para el articulo',
  `NOMBRE_CATALOGO` varchar(254) DEFAULT NULL COMMENT 'Nombre interno que maneja el proveedor para el articulo',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ARTICULO_QUE_OFRECE_PROVEEDOR` (`ARTICULO`),
  KEY `FK_PROVEEDOR_DEL_ARTICULO` (`PROVEEDOR`),
  CONSTRAINT `FK_ARTICULO_QUE_OFRECE_PROVEEDOR` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `FK_PROVEEDOR_DEL_ARTICULO` FOREIGN KEY (`PROVEEDOR`) REFERENCES `proveedor` (`PROVEEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que relaciona los articulos con los proveedores que lo';


DROP TABLE IF EXISTS `auth_asignacion`;
CREATE TABLE `auth_asignacion` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `auth_asignacion_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `auth_items`;
CREATE TABLE `auth_items` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `auth_relaciones`;
CREATE TABLE `auth_relaciones` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_relaciones_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_relaciones_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `bodega`;
CREATE TABLE `bodega` (
  `ID` varchar(4) NOT NULL,
  `DESCRIPCION` varchar(64) NOT NULL COMMENT 'nombre de la bodega',
  `TIPO` varchar(1) NOT NULL COMMENT 'se refiere al tipo de bodega, dependiendo del tipo de artículos que almacene, de esta manera se puede elegir entre consumo, ventas, no disponible.\n            \n            Consumo: Las bodegas de consumo son aquellas en las que normalmente se almacena la ',
  `TELEFONO` varchar(20) DEFAULT NULL,
  `DIRECCION` varchar(128) DEFAULT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='El propósito de la tabla de Bodegas es relacionar los artícu';


DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(64) NOT NULL COMMENT 'nombre la categoria',
  `TIPO` varchar(1) NOT NULL COMMENT '[C]liente o [P]roveedor',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Permite almacenar las categorias para los clientes y proveed';


DROP TABLE IF EXISTS `centro_costos`;
CREATE TABLE `centro_costos` (
  `ID` varchar(25) NOT NULL COMMENT 'identificación alfanumérica del centro de costo, la casilla tiene campo para 25 dígitos. Los códigos de los centros de costo se manejan de la misma manera que se manejan los códigos de las cuentas contables, generando centros padre y centros hijos.',
  `DESCRIPCION` varchar(64) NOT NULL COMMENT 'nombre del centro de costo',
  `TIPO` varchar(1) NOT NULL COMMENT 'tipo del centro de costo, puede seleccionar entre los siguientes valores: Gasto, Ingreso o Ambos.',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Esta tabla establece los centros de costo en que está dividi';


DROP TABLE IF EXISTS `clasific_adi_articulo`;
CREATE TABLE `clasific_adi_articulo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ARTICULO` varchar(20) NOT NULL,
  `VALOR` int(11) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime DEFAULT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CLASIFICACION_ADI_ARTICULO` (`ARTICULO`),
  KEY `FK_VAL_CLASIF_ADI_ARTICULO` (`VALOR`),
  CONSTRAINT `FK_CLASIFICACION_ADI_ARTICULO` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `FK_VAL_CLASIF_ADI_ARTICULO` FOREIGN KEY (`VALOR`) REFERENCES `clasificacion_adi_valor` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Clasificaciones adicionales para lo articulos';


DROP TABLE IF EXISTS `clasificacion_adi`;
CREATE TABLE `clasificacion_adi` (
  `ID` varchar(12) NOT NULL,
  `NOMBRE` varchar(64) NOT NULL,
  `OBLIGATORIO` varchar(1) NOT NULL,
  `POSICION` smallint(6) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Clasificaciones para los articulos';


DROP TABLE IF EXISTS `clasificacion_adi_valor`;
CREATE TABLE `clasificacion_adi_valor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLASIFICACION` varchar(12) NOT NULL,
  `VALOR` varchar(12) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CLASIFICACION_DE_LOS_VALORES` (`CLASIFICACION`),
  CONSTRAINT `FK_CLASIFICACION_DE_LOS_VALORES` FOREIGN KEY (`CLASIFICACION`) REFERENCES `clasificacion_adi` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Valores o detalle de las clasificaciones adicionales';


DROP TABLE IF EXISTS `codicion_pago`;
CREATE TABLE `codicion_pago` (
  `ID` varchar(4) NOT NULL COMMENT 'identificación alfanumérica de la condicion de pago',
  `DESCRIPCION` varchar(64) NOT NULL COMMENT 'nombre de la forma de pago.',
  `DIAS_NETO` int(11) NOT NULL COMMENT 'cantidad máxima de días de crédito que acepta la condición',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='El propósito de la tabla de Condiciones de Pago, es definir ';


DROP TABLE IF EXISTS `compania`;
CREATE TABLE `compania` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(128) NOT NULL,
  `NOMBRE_ABREV` varchar(64) NOT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `UBICACION_GEOGRAFICA1` varchar(2) DEFAULT NULL,
  `UBICACION_GEOGRAFICA2` varchar(5) DEFAULT NULL,
  `PAIS` varchar(4) DEFAULT NULL,
  `DIRECCION` varchar(256) DEFAULT NULL,
  `TELEFONO1` varchar(20) DEFAULT NULL,
  `TELEFONO2` varchar(20) DEFAULT NULL,
  `LOGO` varchar(128) DEFAULT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_PAIS_DE_LA_COMPANIA` (`PAIS`),
  KEY `FK_UBICACION_GEOGRAFICA_COMPANIA` (`UBICACION_GEOGRAFICA2`),
  KEY `UBICACION_GEOGRAFICA1` (`UBICACION_GEOGRAFICA1`),
  CONSTRAINT `compania_ibfk_1` FOREIGN KEY (`UBICACION_GEOGRAFICA1`) REFERENCES `ubicacion_geografica1` (`ID`),
  CONSTRAINT `FK_PAIS_DE_LA_COMPANIA` FOREIGN KEY (`PAIS`) REFERENCES `pais` (`ID`),
  CONSTRAINT `FK_UBICACION_GEOGRAFICA_COMPANIA` FOREIGN KEY (`UBICACION_GEOGRAFICA2`) REFERENCES `ubicacion_geografica2` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los datos de la empresa o compañia';


DROP TABLE IF EXISTS `conf_as`;
CREATE TABLE `conf_as` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IMPUESTO1_DESC` varchar(10) DEFAULT NULL COMMENT 'Se debe digitar el nombre que se desea aparezca en los reportes bajo el concepto de impuesto 1. Generalmente se utiliza “Consumo” o “Servicio”. No existe una tabla asociada a este campo, solamente es un campo de texto en el cual el usuario indica al siste',
  `IMPUESTO2_DESC` varchar(10) DEFAULT NULL COMMENT 'Se debe digitar el nombre que se desea aparezca en los reportes bajo el concepto de impuesto 2. Generalmente se utiliza "Ventas", pero si existen otros varios tipos de impuestos, se recomienda definir el mismo como Otros para poder utilizarlo de comodín. ',
  `PATRON_CCOSTO` varchar(25) DEFAULT NULL COMMENT 'es el formato que se utiliza para definir el código de los Centros de Costo.\n            La idea del patrón, es organizar los centros de costo por niveles, su funcionalidad es similar a lo que se definirá para las cuentas contables.\n            Así por ej',
  `SIMBOLO_MONEDA` varchar(3) DEFAULT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena la configuración para el modulo administr';


DROP TABLE IF EXISTS `conf_ci`;
CREATE TABLE `conf_ci` (
  `ID` int(11) NOT NULL,
  `COSTOS_DEC` smallint(6) NOT NULL COMMENT 'Numero de decimales para los costos',
  `EXISTENCIAS_DEC` smallint(6) NOT NULL COMMENT 'Numero de decimales para existencias',
  `PESOS_DEC` smallint(6) NOT NULL COMMENT 'Numero de decimales para el peso de los articulos',
  `COSTO_FISCAL` varchar(10) NOT NULL COMMENT 'costo por omision fiscal            ',
  `COSTO_INGR_DEFAULT` varchar(1) NOT NULL COMMENT 'Costo para ingresos especiales [U]ltimo, [P]romedio o [F]iscal',
  `UNIDAD_PESO` int(11) NOT NULL COMMENT 'unidad de medida que se utilizará para definir el peso de los artículos en inventario',
  `UNIDAD_VOLUMEN` int(11) NOT NULL COMMENT 'unidad de medida que se utilizará para definir el volumen o espacio que ocupan los artículos en el inventario',
  `EXIST_DISPONIBLE` varchar(10) NOT NULL COMMENT 'tipos de existencias que se considerarán para calcular la existencia total de un artículo, se pueden marcar 3 opciones [DIS]ponible, [REM]itida, [RES]ervada, se guardaran separadas por coma en este campo',
  `EXIST_REMITIDA` varchar(3) NOT NULL,
  `EXIST_RESERVADA` varchar(3) NOT NULL,
  `INTEGRACION_CONTA` varchar(1) NOT NULL COMMENT 'Integracion del modulo de inventarios con el modulo contable Si o No',
  `USA_CODIGO_BARRAS` varchar(1) NOT NULL COMMENT 'El sistema utilizará codigo de barras Si o No',
  `LINEAS_MAX_TRANS` int(11) NOT NULL COMMENT 'Número máximo de líneas',
  `USA_UNIDADES_DIST` varchar(1) NOT NULL COMMENT 'Unidades de Distribución: permite que se utilicen las unidades de distribución. Si o No',
  `ASISTENCIA_AUTOMAT` varchar(1) DEFAULT NULL COMMENT 'Asistencia Automática, la asistencia automática en los códigos de barras consiste en un mecanismo el cual puede auxiliar tanto la creación como la validación de los códigos de barras.  Si o No',
  `USA_CODIGO_EAN13` varchar(1) DEFAULT NULL COMMENT 'Si o No',
  `USA_CODIGO_EAN8` varchar(1) DEFAULT NULL COMMENT 'Si o No',
  `USA_CODIGO_UCC12` varchar(1) DEFAULT NULL COMMENT 'Si o No',
  `USA_CODIGO_UCC8` varchar(1) DEFAULT NULL COMMENT 'Si o No',
  `EAN13_REGLA_LOCAL` varchar(18) DEFAULT NULL COMMENT 'codigos fijo de reglas locales para ean 13',
  `EAN8_REGLA_LOCAL` varchar(3) DEFAULT NULL COMMENT 'codigos fijo de reglas locales para ean 8',
  `UCC12_REGLA_LOCAL` varchar(6) DEFAULT NULL COMMENT 'codigos fijo de reglas locales para ucc 12',
  `PRIORIDAD_BUSQUEDA` varchar(1) NOT NULL COMMENT '[A]rticulo, [C]odigo de barras',
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_METODO_COSTO_FISCAL` (`COSTO_FISCAL`),
  KEY `FK_UND_DEFECTO_PESO` (`UNIDAD_PESO`),
  KEY `FK_UND_DEFECTO_VOLUMEN` (`UNIDAD_VOLUMEN`),
  CONSTRAINT `FK_METODO_COSTO_FISCAL` FOREIGN KEY (`COSTO_FISCAL`) REFERENCES `metodo_valuacion_inv` (`ID`),
  CONSTRAINT `FK_UND_DEFECTO_PESO` FOREIGN KEY (`UNIDAD_PESO`) REFERENCES `unidad_medida` (`ID`),
  CONSTRAINT `FK_UND_DEFECTO_VOLUMEN` FOREIGN KEY (`UNIDAD_VOLUMEN`) REFERENCES `unidad_medida` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de configuracion del modulo de inventarios';


DROP TABLE IF EXISTS `conf_co`;
CREATE TABLE `conf_co` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BODEGA_DEFAULT` varchar(4) DEFAULT NULL,
  `ULT_SOLICITUD` varchar(10) DEFAULT NULL COMMENT 'Ultimo numero de solicitud',
  `ULT_ORDEN_COMPRA` varchar(10) DEFAULT NULL COMMENT 'Ultimo numero de orden de compra',
  `ULT_EMBARQUE` varchar(10) DEFAULT NULL COMMENT 'Ultimo numero de embarque',
  `ULT_SOLICITUD_M` varchar(10) DEFAULT NULL COMMENT 'Mascara para las solicitudes',
  `ULT_ORDEN_COMPRA_M` varchar(10) DEFAULT NULL COMMENT 'Mascara para los numeros de ordenes de compra',
  `ULT_EMBARQUE_M` varchar(10) DEFAULT NULL COMMENT 'Mascara para los numeros de los embarques',
  `ULT_DEVOLUCION` varchar(10) DEFAULT NULL COMMENT 'Numero de la ultima devoluciòn',
  `ULT_DEVOLUCION_M` varchar(10) DEFAULT NULL COMMENT 'Mascara para los numeros de las devoluciones',
  `USAR_RUBROS` varchar(1) DEFAULT NULL COMMENT 'define si las solicitudes, órdenes y embarques de compra usarán rubros (SI) o no los utilizarán (NO).',
  `ORDEN_OBSERVACION` text COMMENT 'dentro de este espacio se ingresan notas adicionales o leyendas que se requieran ingresar en el reporte de órdenes de compra ',
  `MAXIMO_LINORDEN` int(11) DEFAULT NULL COMMENT 'Numero maximo de lineas en la orden de compra',
  `POR_VARIAC_COSTO` decimal(28,0) DEFAULT NULL,
  `CP_EN_LINEA` varchar(1) DEFAULT NULL COMMENT 'Generar factura en linea al aplicar el embarque',
  `IMP1_AFECTA_DESCTO` varchar(1) DEFAULT NULL COMMENT 'Como se afecata el impuesto 1, existen 3 opciones [L]inea, [A]mbos descuentos y [N]ingun descuento',
  `FACTOR_REDONDEO` decimal(28,0) DEFAULT NULL COMMENT 'Factor de redondeo para los movimientos generados en el modulo de compra',
  `PRECIO_DEC` smallint(6) DEFAULT NULL COMMENT 'Numero de decimales utilizados para precios en el modulo',
  `CANTIDAD_DEC` smallint(6) DEFAULT NULL COMMENT 'numero de decimales para las cantidades que se utilicen en el modulo',
  `PEDIDOS_SOLICITUD` varchar(1) DEFAULT NULL COMMENT 'Visualizar columnas de pedidos en solicitudes de compra S o N',
  `PEDIDOS_ORDEN` varchar(1) DEFAULT NULL COMMENT 'Visualizar columnas de pedidos en ordenes de compra S o N',
  `PEDIDOS_EMBARQUE` varchar(1) DEFAULT NULL COMMENT 'Visualizar columnas de pedidos en embarque S o N',
  `DIRECCION_EMBARQUE` text COMMENT 'La dirección donde los proveedores deberán enviar la mercadería',
  `DIRECCION_COBRO` text COMMENT 'la dirección donde se deben cobrar las facturas generadas debido a los embarques enviados',
  `RUBRO1_SOLNOM` varchar(15) DEFAULT NULL,
  `RUBRO2_SOLNOM` varchar(15) DEFAULT NULL,
  `RUBRO3_SOLNOM` varchar(15) DEFAULT NULL,
  `RUBRO4_SOLNOM` varchar(15) DEFAULT NULL,
  `RUBRO5_SOLNOM` varchar(15) DEFAULT NULL,
  `RUBRO1_EMBNOM` varchar(15) DEFAULT NULL,
  `RUBRO2_EMBNOM` varchar(15) DEFAULT NULL,
  `RUBRO3_EMBNOM` varchar(15) DEFAULT NULL,
  `RUBRO4_EMBNOM` varchar(15) DEFAULT NULL,
  `RUBRO5_EMBNOM` varchar(15) DEFAULT NULL,
  `RUBRO1_ORDNOM` varchar(15) DEFAULT NULL,
  `RUBRO2_ORDNOM` varchar(15) DEFAULT NULL,
  `RUBRO3_ORDNOM` varchar(15) DEFAULT NULL,
  `RUBRO4_ORDNOM` varchar(15) DEFAULT NULL,
  `RUBRO5_ORDNOM` varchar(15) DEFAULT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_BODEGA_DEFECTO_COMPRAS` (`BODEGA_DEFAULT`),
  CONSTRAINT `FK_BODEGA_DEFECTO_COMPRAS` FOREIGN KEY (`BODEGA_DEFAULT`) REFERENCES `bodega` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Configuracion del modulo de compras';


DROP TABLE IF EXISTS `conf_fa`;
CREATE TABLE `conf_fa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `COND_PAGO_CONTADO` varchar(4) DEFAULT NULL,
  `BODEGA_DEFECTO` varchar(4) DEFAULT NULL,
  `CATEGORIA_CLIENTE` int(11) DEFAULT NULL,
  `NIVEL_PRECIO` varchar(12) DEFAULT NULL,
  `DECIMALES_PRECIO` smallint(6) NOT NULL,
  `DESCUENTO_PRECIO` varchar(1) NOT NULL COMMENT 'Descuento a lineas de documentos            [U] Precio Unitario            [T]otal de la linea',
  `DESCUENTO_AFECTA_IMP` varchar(1) NOT NULL COMMENT '[L]ineas            [A]mbos            [T]otal            [N]inguno',
  `FORMATO_PEDIDO` int(11) DEFAULT NULL,
  `FORMATO_FACTURA` int(11) DEFAULT NULL,
  `FORMATO_REMISION` int(11) DEFAULT NULL,
  `USAR_RUBROS` varchar(1) DEFAULT NULL COMMENT '[S]i            [N]o',
  `RUBRO1_NOMBRE` varchar(15) DEFAULT NULL,
  `RUBRO2_NOMBRE` varchar(15) DEFAULT NULL,
  `RUBRO3_NOMBRE` varchar(15) DEFAULT NULL,
  `RUBRO4_NOMBRE` varchar(15) DEFAULT NULL,
  `RUBRO5_NOMBRE` varchar(15) DEFAULT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_BODEGA_DEFECTO_FACTURA` (`BODEGA_DEFECTO`),
  KEY `FK_CATEGORIA_CLIENTE_DEFECTO` (`CATEGORIA_CLIENTE`),
  KEY `FK_CONDICION_PAGO_CONTADO_FACTURA` (`COND_PAGO_CONTADO`),
  KEY `FK_FORMATO_DEFECTO_FACTURA` (`FORMATO_FACTURA`),
  KEY `FK_FORMATO_DEFECTO_PEDIDO` (`FORMATO_PEDIDO`),
  KEY `FK_FORMATO_DEFECTO_REMISION` (`FORMATO_REMISION`),
  KEY `FK_NIVEL_PRECIO_DEFECTO` (`NIVEL_PRECIO`),
  CONSTRAINT `FK_BODEGA_DEFECTO_FACTURA` FOREIGN KEY (`BODEGA_DEFECTO`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_CATEGORIA_CLIENTE_DEFECTO` FOREIGN KEY (`CATEGORIA_CLIENTE`) REFERENCES `categoria` (`ID`),
  CONSTRAINT `FK_CONDICION_PAGO_CONTADO_FACTURA` FOREIGN KEY (`COND_PAGO_CONTADO`) REFERENCES `codicion_pago` (`ID`),
  CONSTRAINT `FK_FORMATO_DEFECTO_FACTURA` FOREIGN KEY (`FORMATO_FACTURA`) REFERENCES `formato_impresion` (`ID`),
  CONSTRAINT `FK_FORMATO_DEFECTO_PEDIDO` FOREIGN KEY (`FORMATO_PEDIDO`) REFERENCES `formato_impresion` (`ID`),
  CONSTRAINT `FK_FORMATO_DEFECTO_REMISION` FOREIGN KEY (`FORMATO_REMISION`) REFERENCES `formato_impresion` (`ID`),
  CONSTRAINT `FK_NIVEL_PRECIO_DEFECTO` FOREIGN KEY (`NIVEL_PRECIO`) REFERENCES `nivel_precio` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena la configuración para el modulo de factur';


DROP TABLE IF EXISTS `consec_ci_tipo_trans`;
CREATE TABLE `consec_ci_tipo_trans` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CONSECUTIVO_CI` varchar(10) NOT NULL,
  `TIPO_TRANSACCION` varchar(4) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CONSECUTIVO_CI_PARA_TIPO_TRANSACCION` (`CONSECUTIVO_CI`),
  KEY `FK_TIPO_TRANSACCION_PARA_CONSECUTIVO_CI` (`TIPO_TRANSACCION`),
  CONSTRAINT `FK_CONSECUTIVO_CI_PARA_TIPO_TRANSACCION` FOREIGN KEY (`CONSECUTIVO_CI`) REFERENCES `consecutivo_ci` (`ID`),
  CONSTRAINT `FK_TIPO_TRANSACCION_PARA_CONSECUTIVO_CI` FOREIGN KEY (`TIPO_TRANSACCION`) REFERENCES `tipo_transaccion` (`TIPO_TRANSACCION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla en la que se almacena los tipos de trasnaccion asociad';


DROP TABLE IF EXISTS `consec_ci_usuario`;
CREATE TABLE `consec_ci_usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CONSECUTIVO_CI` varchar(10) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CONSECUTIVO_CI_HABILITADO_PARA_USUARIO` (`CONSECUTIVO_CI`),
  CONSTRAINT `FK_CONSECUTIVO_CI_HABILITADO_PARA_USUARIO` FOREIGN KEY (`CONSECUTIVO_CI`) REFERENCES `consecutivo_ci` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena que usuarios pueden usar un determinado c';


DROP TABLE IF EXISTS `consecutivo_ci`;
CREATE TABLE `consecutivo_ci` (
  `ID` varchar(10) NOT NULL,
  `FORMATO_IMPRESION` int(11) DEFAULT NULL COMMENT 'Formato de impresiòn que se utilizará cuando se vayan a imprimir documentos de inventario con este consecutivo',
  `DESCRIPCION` varchar(48) NOT NULL,
  `MASCARA` varchar(20) NOT NULL,
  `SIGUIENTE_VALOR` varchar(20) NOT NULL COMMENT 'Siguiente valor que se usara para un documento de inventarios que tenga este consecutivo',
  `TODOS_USUARIOS` varchar(1) NOT NULL COMMENT 'S = Cualquier usuario puede usar el consecutivo\r\n            N = Solo los usuarios definidos en la tabla consec_ci_usuario puede usar el consecutivo.',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_FORMATO_IMPRESION_CONSECUTIVO_CI` (`FORMATO_IMPRESION`),
  CONSTRAINT `FK_FORMATO_IMPRESION_CONSECUTIVO_CI` FOREIGN KEY (`FORMATO_IMPRESION`) REFERENCES `formato_impresion` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los consecutivos para los documentos de control de ';


DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `ID` varchar(10) NOT NULL COMMENT 'identificación alfanumérica del departamento, la casilla tiene campo para 10 dígitos.',
  `DESCRIPCION` varchar(64) NOT NULL COMMENT 'nombre del departamento, la casilla tiene campo para 40 dígitos.',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='La tabla de datos que despliega la opción, sirve para establ';


DROP TABLE IF EXISTS `dia_feriado`;
CREATE TABLE `dia_feriado` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `TIPO` varchar(1) NOT NULL COMMENT 'Este espacio dispone de un botón con una flecha que señala hacia abajo, el cual le da la opción al usuario de elegir entre dos tipos de feriado predestinados, los cuales son: Fijo y Variable.\n            El Fijo es el que se da por ley, establecido por ob',
  `DIA` int(11) NOT NULL COMMENT 'nombre del departamento, la casilla tiene campo para 40 dígitos.',
  `MES` int(11) NOT NULL,
  `ANIO` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(64) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Permite definir los dias festivos o feriados para que no los';


DROP TABLE IF EXISTS `documento_inv`;
CREATE TABLE `documento_inv` (
  `DOCUMENTO_INV` varchar(20) NOT NULL,
  `CONSECUTIVO` varchar(10) NOT NULL,
  `FECHA_DOCUMENTO` date NOT NULL,
  `REFERENCIA` varchar(200) NOT NULL,
  `ESTADO` varchar(1) NOT NULL COMMENT '[P]endiente\n            [A]probado\n            [L]isto o Aplicado\n            [C]ancelado',
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`DOCUMENTO_INV`),
  KEY `FK_TIPO_CONSECUTIVO_DOCUMENTO` (`CONSECUTIVO`),
  CONSTRAINT `FK_TIPO_CONSECUTIVO_DOCUMENTO` FOREIGN KEY (`CONSECUTIVO`) REFERENCES `consecutivo_ci` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los documentos creados en el modulo de inventarios';


DROP TABLE IF EXISTS `documento_inv_linea`;
CREATE TABLE `documento_inv_linea` (
  `DOCUMENTO_INV_LINEA` int(11) NOT NULL AUTO_INCREMENT,
  `DOCUMENTO_INV` varchar(20) NOT NULL,
  `LINEA_NUM` smallint(6) NOT NULL,
  `TIPO_TRANSACCION` varchar(4) NOT NULL,
  `SUBTIPO` int(11) DEFAULT NULL,
  `TIPO_TRANSACCION_CANTIDAD` varchar(1) DEFAULT NULL,
  `BODEGA` varchar(4) NOT NULL,
  `BODEGA_DESTINO` varchar(4) DEFAULT NULL,
  `ARTICULO` varchar(20) NOT NULL,
  `CANTIDAD` decimal(28,8) NOT NULL,
  `UNIDAD` int(11) NOT NULL,
  `COSTO_UNITARIO` decimal(28,8) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`DOCUMENTO_INV_LINEA`),
  KEY `FK_ARTICULO_MOVIMIENTO` (`ARTICULO`),
  KEY `FK_BODEFA_A_AFECTAR` (`BODEGA`),
  KEY `FK_DOCUMENTO_INV` (`DOCUMENTO_INV`),
  KEY `FK_SUBTIPO_TRANSACCION` (`SUBTIPO`),
  KEY `FK_TIPO_TRANSACCION` (`TIPO_TRANSACCION`),
  KEY `FK_UNIDAD_MOVIMIENTO` (`UNIDAD`),
  KEY `FK_TIPO_CANTIDAD_AFECTAR` (`TIPO_TRANSACCION_CANTIDAD`),
  KEY `FK_BODEGA_DESTINO` (`BODEGA_DESTINO`),
  CONSTRAINT `FK_ARTICULO_MOVIMIENTO` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `FK_BODEFA_A_AFECTAR` FOREIGN KEY (`BODEGA`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_BODEGA_DESTINO` FOREIGN KEY (`BODEGA_DESTINO`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_DOCUMENTO_INV` FOREIGN KEY (`DOCUMENTO_INV`) REFERENCES `documento_inv` (`DOCUMENTO_INV`),
  CONSTRAINT `FK_SUBTIPO_TRANSACCION` FOREIGN KEY (`SUBTIPO`) REFERENCES `subtipo_transaccion` (`ID`),
  CONSTRAINT `FK_TIPO_CANTIDAD_AFECTAR` FOREIGN KEY (`TIPO_TRANSACCION_CANTIDAD`) REFERENCES `tipo_cantidad_articulo` (`ID`),
  CONSTRAINT `FK_TIPO_TRANSACCION` FOREIGN KEY (`TIPO_TRANSACCION`) REFERENCES `tipo_transaccion` (`TIPO_TRANSACCION`),
  CONSTRAINT `FK_UNIDAD_MOVIMIENTO` FOREIGN KEY (`UNIDAD`) REFERENCES `unidad_medida` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Lineas del documento de inventario';


DROP TABLE IF EXISTS `entidad_financiera`;
CREATE TABLE `entidad_financiera` (
  `ID` int(11) NOT NULL,
  `NIT` varchar(20) NOT NULL,
  `DESCRIPCION` varchar(64) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_NIT_ENTIDAD_FINACIERA` (`NIT`),
  CONSTRAINT `FK_NIT_ENTIDAD_FINACIERA` FOREIGN KEY (`NIT`) REFERENCES `nit` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='El objetivo de esta tabla es definir todas las entidades fin';


DROP TABLE IF EXISTS `existencia_bodega`;
CREATE TABLE `existencia_bodega` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ARTICULO` varchar(20) NOT NULL,
  `BODEGA` varchar(4) NOT NULL,
  `EXISTENCIA_MINIMA` decimal(28,8) NOT NULL,
  `EXISTENCIA_MAXIMA` decimal(28,8) NOT NULL,
  `PUNTO_REORDEN` decimal(28,8) NOT NULL,
  `CANT_DISPONIBLE` decimal(28,8) NOT NULL,
  `CANT_RESERVADA` decimal(28,8) NOT NULL,
  `CANT_REMITIDA` decimal(28,8) NOT NULL,
  `CANT_CUARENTENA` decimal(28,8) NOT NULL,
  `CANT_VENCIDA` decimal(28,8) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ARTICULO_BODEGA` (`ARTICULO`),
  KEY `FK_BODEGA_ARTICULO` (`BODEGA`),
  CONSTRAINT `FK_ARTICULO_BODEGA` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `FK_BODEGA_ARTICULO` FOREIGN KEY (`BODEGA`) REFERENCES `bodega` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla donde se relaciona un articulo con una bodega donde se';


DROP TABLE IF EXISTS `formato_impresion`;
CREATE TABLE `formato_impresion` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(64) NOT NULL,
  `OBSERVACION` text,
  `MODULO` varchar(4) NOT NULL COMMENT 'Modulo al cual pertenece este formato de impresiòn por ejemplo\r\n            Compras COMP\r\n            Control de Inventarios COIN',
  `SUBMODULO` varchar(4) NOT NULL COMMENT 'Submodulo para el cual aplica este formato de impresión, por ejemplo el modulo de compras tiene\r\n            Solicitudes SOLI\r\n            Ordenes de Compra ORCO\r\n            etc.',
  `RUTA` varchar(128) NOT NULL COMMENT 'ruta donde esta ubicado el archivo que genera el formato',
  `TIPO` varchar(4) NOT NULL COMMENT 'Tipo de archivo en que se genera el formato\r\n            xls\r\n            pdf\r\n            doc\r\n            etc',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los diferentes formatos de impresion que ';


DROP TABLE IF EXISTS `impuesto`;
CREATE TABLE `impuesto` (
  `ID` varchar(4) NOT NULL,
  `NOMBRE` varchar(64) NOT NULL COMMENT 'nombre del tipo de impuesto o tipo de iva',
  `PROCENTAJE` decimal(28,8) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Permite definir los diferentes porcentajes para el impuesto ';


DROP TABLE IF EXISTS `ingreso_compra`;
CREATE TABLE `ingreso_compra` (
  `INGRESO_COMPRA` varchar(10) NOT NULL,
  `PROVEEDOR` varchar(20) NOT NULL,
  `FECHA_INGRESO` date NOT NULL COMMENT 'Fecha en que ingresan los articulos a la compañia',
  `TIENE_FACTURA` varchar(1) NOT NULL COMMENT 'Ingreso de Compra tiene factura [S] o [N]',
  `RUBRO1` varchar(50) DEFAULT NULL,
  `RUBRO2` varchar(50) DEFAULT NULL,
  `RUBRO3` varchar(50) DEFAULT NULL,
  `RUBRO4` varchar(50) DEFAULT NULL,
  `RUBRO5` varchar(50) DEFAULT NULL,
  `NOTAS` text,
  `ESTADO` varchar(1) NOT NULL COMMENT '[P]endiente\n            [A]plicado\n            [C]ancelado',
  `APLICADO_POR` varchar(20) DEFAULT NULL,
  `APLICADO_EL` datetime DEFAULT NULL,
  `CANCELADO_POR` varchar(20) DEFAULT NULL,
  `CANCELADO_EL` datetime DEFAULT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `MODIFICADO_POR` varchar(20) NOT NULL,
  `MODIFICADO_EL` datetime NOT NULL,
  PRIMARY KEY (`INGRESO_COMPRA`),
  KEY `FK_INGRESO_COMPRA_PROVEEDOR` (`PROVEEDOR`),
  CONSTRAINT `FK_INGRESO_COMPRA_PROVEEDOR` FOREIGN KEY (`PROVEEDOR`) REFERENCES `proveedor` (`PROVEEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Documentos de ingreso de compra a partir de ordenes de compr';


DROP TABLE IF EXISTS `ingreso_compra_linea`;
CREATE TABLE `ingreso_compra_linea` (
  `INGRESO_COMPRA_LINEA` int(11) NOT NULL AUTO_INCREMENT,
  `INGRESO_COMPRA` varchar(10) NOT NULL,
  `LINEA_NUM` smallint(6) NOT NULL,
  `ORDEN_COMPRA_LINEA` int(11) DEFAULT NULL,
  `ARTICULO` varchar(20) NOT NULL,
  `BODEGA` varchar(4) NOT NULL,
  `CANTIDAD_ORDENADA` decimal(28,8) NOT NULL,
  `UNIDAD_ORDENADA` int(11) NOT NULL,
  `CANTIDAD_ACEPTADA` decimal(28,8) NOT NULL,
  `CANTIDAD_RECHAZADA` decimal(28,8) NOT NULL,
  `PRECIO_UNITARIO` decimal(28,8) NOT NULL,
  `COSTO_FISCAL_UNITARIO` decimal(28,8) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`INGRESO_COMPRA_LINEA`),
  KEY `FK_ARTICULO_INGRESO_COMPRA` (`ARTICULO`),
  KEY `FK_BODEGA_INGRESO_COMPRA` (`BODEGA`),
  KEY `FK_LINEA_PERTENECE_INGRESO_COMPRA` (`INGRESO_COMPRA`),
  KEY `FK_SATISFACE_LINEA_OC` (`ORDEN_COMPRA_LINEA`),
  KEY `FK_UNIDAD_INGRESO_COMPRA` (`UNIDAD_ORDENADA`),
  CONSTRAINT `FK_ARTICULO_INGRESO_COMPRA` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `FK_BODEGA_INGRESO_COMPRA` FOREIGN KEY (`BODEGA`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_LINEA_PERTENECE_INGRESO_COMPRA` FOREIGN KEY (`INGRESO_COMPRA`) REFERENCES `ingreso_compra` (`INGRESO_COMPRA`),
  CONSTRAINT `FK_SATISFACE_LINEA_OC` FOREIGN KEY (`ORDEN_COMPRA_LINEA`) REFERENCES `orden_compra_linea` (`ORDEN_COMPRA_LINEA`),
  CONSTRAINT `FK_UNIDAD_INGRESO_COMPRA` FOREIGN KEY (`UNIDAD_ORDENADA`) REFERENCES `unidad_medida` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Lineas del ingreso de la compra';


DROP TABLE IF EXISTS `mensaje_sistema`;
CREATE TABLE `mensaje_sistema` (
  `CODIGO` varchar(4) NOT NULL,
  `TIPO` varchar(10) NOT NULL,
  `MENSAJE` text NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los mensajes del sistema';


DROP TABLE IF EXISTS `metodo_valuacion_inv`;
CREATE TABLE `metodo_valuacion_inv` (
  `ID` varchar(10) NOT NULL,
  `DESCRIPCION` varchar(64) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los metodos de valuación de inventario (e';


DROP TABLE IF EXISTS `nit`;
CREATE TABLE `nit` (
  `ID` varchar(12) NOT NULL COMMENT 'identificación alfanumérica del departamento, la casilla tiene campo para 10 dígitos.',
  `TIIPO_DOCUMENTO` varchar(10) NOT NULL,
  `RAZON_SOCIAL` varchar(128) NOT NULL COMMENT 'nombre del departamento, la casilla tiene campo para 40 dígitos.',
  `ALIAS` varchar(128) DEFAULT NULL,
  `OBSERVACIONES` text,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_TIPO_DOCUMENTO_NIT` (`TIIPO_DOCUMENTO`),
  CONSTRAINT `FK_TIPO_DOCUMENTO_NIT` FOREIGN KEY (`TIIPO_DOCUMENTO`) REFERENCES `tipo_documento` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='La tabla de datos denominada NIT’s sirve para registrar los ';


DROP TABLE IF EXISTS `nivel_precio`;
CREATE TABLE `nivel_precio` (
  `ID` varchar(12) NOT NULL COMMENT 'identificación alfanumérica del nivel de precio.',
  `DESCRIPCION` varchar(64) NOT NULL COMMENT 'nombre del nivel de precio',
  `ESQUEMA_TRABAJO` varchar(4) NOT NULL COMMENT 'se refiere al procedimiento que se utilizará para calcular los precios de los artículos.\n            \n            Al posicionarse en la casilla de esquema de trabajo, también aparece un icono con una flecha hacia abajo. Las opciones que se pueden escoger ',
  `CONDICION_PAGO` varchar(4) DEFAULT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_COND_PAGO_NV_PRECIO` (`CONDICION_PAGO`),
  CONSTRAINT `FK_COND_PAGO_NV_PRECIO` FOREIGN KEY (`CONDICION_PAGO`) REFERENCES `codicion_pago` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los posibles tipos precios de los artículos de la c';


DROP TABLE IF EXISTS `orden_compra`;
CREATE TABLE `orden_compra` (
  `ORDEN_COMPRA` varchar(10) NOT NULL,
  `PROVEEDOR` varchar(20) NOT NULL,
  `FECHA` date NOT NULL COMMENT 'Fecha de creacion de la orden de compra',
  `BODEGA` varchar(4) NOT NULL COMMENT 'Bodega a donde se ingresaran los articulos de la orden de compra',
  `DEPARTAMENTO` varchar(10) DEFAULT NULL,
  `FECHA_COTIZACION` date DEFAULT NULL,
  `FECHA_OFRECIDA` date DEFAULT NULL,
  `FECHA_REQUERIDA` date DEFAULT NULL,
  `FECHA_REQ_EMBARQUE` date DEFAULT NULL,
  `PRIORIDAD` varchar(1) NOT NULL COMMENT '[A]lta,             [M]edia            [B]aja',
  `CONDICION_PAGO` varchar(4) NOT NULL,
  `DIRECCION_EMBARQUE` varchar(250) DEFAULT NULL,
  `DIRECCION_COBRO` varchar(250) DEFAULT NULL,
  `RUBRO1` varchar(50) DEFAULT NULL,
  `RUBRO2` varchar(50) DEFAULT NULL,
  `RUBRO3` varchar(50) DEFAULT NULL,
  `RUBRO4` varchar(50) DEFAULT NULL,
  `RUBRO5` varchar(50) DEFAULT NULL,
  `COMENTARIO_CXP` varchar(250) DEFAULT NULL,
  `INSTRUCCIONES` varchar(250) DEFAULT NULL,
  `OBSERVACIONES` text,
  `PORC_DESCUENTO` decimal(28,8) NOT NULL,
  `MONTO_FLETE` decimal(28,8) NOT NULL,
  `MONTO_SEGURO` decimal(28,8) NOT NULL,
  `MONTO_ANTICIPO` decimal(28,8) NOT NULL,
  `TIPO_PRORRATEO_OC` varchar(3) DEFAULT NULL COMMENT '[CAN]tidad            [PRE]cio            [PRO]medio',
  `TOTAL_A_COMPRAR` decimal(28,8) NOT NULL COMMENT 'Total de la orden de compra',
  `USUARIO_CANCELA` varchar(20) DEFAULT NULL,
  `FECHA_CANCELA` datetime DEFAULT NULL,
  `ESTADO` varchar(1) NOT NULL COMMENT '[P]laneada            [B]ackorder            [R]ecibida            [C]ancelada',
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  `USUARIO_CIERRA` varchar(20) NOT NULL,
  `FECHA_CIERRA` datetime NOT NULL,
  `AUTORIZADA_POR` varchar(20) NOT NULL,
  `FECHA_AUTORIZADA` datetime NOT NULL,
  PRIMARY KEY (`ORDEN_COMPRA`),
  KEY `FK_BODEGA_ORDEN_COMPRA` (`BODEGA`),
  KEY `FK_CONDICION_PAGO_OC` (`CONDICION_PAGO`),
  KEY `FK_DEPARTAMENTO_ORDEN_COMPRA` (`DEPARTAMENTO`),
  KEY `FK_PROVEEDOR_ORDEN_COMPRA` (`PROVEEDOR`),
  CONSTRAINT `FK_BODEGA_ORDEN_COMPRA` FOREIGN KEY (`BODEGA`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_CONDICION_PAGO_OC` FOREIGN KEY (`CONDICION_PAGO`) REFERENCES `codicion_pago` (`ID`),
  CONSTRAINT `FK_DEPARTAMENTO_ORDEN_COMPRA` FOREIGN KEY (`DEPARTAMENTO`) REFERENCES `departamento` (`ID`),
  CONSTRAINT `FK_PROVEEDOR_ORDEN_COMPRA` FOREIGN KEY (`PROVEEDOR`) REFERENCES `proveedor` (`PROVEEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena las ordenes de compra';


DROP TABLE IF EXISTS `orden_compra_linea`;
CREATE TABLE `orden_compra_linea` (
  `ORDEN_COMPRA_LINEA` int(11) NOT NULL AUTO_INCREMENT,
  `ORDEN_COMPRA` varchar(10) NOT NULL,
  `LINEA_NUM` smallint(6) NOT NULL,
  `ARTICULO` varchar(20) NOT NULL,
  `DESCRIPCION` varchar(128) DEFAULT NULL,
  `BODEGA` varchar(4) NOT NULL,
  `FECHA_REQUERIDA` date NOT NULL,
  `FACTURA` varchar(20) DEFAULT NULL,
  `CANTIDAD_ORDENADA` decimal(28,8) NOT NULL,
  `UNIDAD_COMPRA` int(11) NOT NULL,
  `PRECIO_UNITARIO` decimal(28,8) NOT NULL,
  `PORC_DESCUENTO` decimal(28,8) NOT NULL,
  `MONTO_DESCUENTO` decimal(28,8) NOT NULL,
  `PORC_IMPUESTO` decimal(28,8) NOT NULL,
  `VALOR_IMPUESTO` decimal(28,8) NOT NULL,
  `CANTIDAD_RECIBIDA` decimal(28,8) NOT NULL,
  `CANTIDAD_RECHAZADA` decimal(28,8) NOT NULL,
  `FECHA` date NOT NULL COMMENT 'Fecha de creación de la orden de compra',
  `OBSERVACION` text,
  `ESTADO` varchar(1) NOT NULL COMMENT '[P]laneada            [B]ackorder            [R]ecibida            [C]ancelada',
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ORDEN_COMPRA_LINEA`),
  KEY `FK_ARTICULO_LINEA_COMPRA` (`ARTICULO`),
  KEY `FK_BODEGA_LINEA_ORDEN_COMPRA` (`BODEGA`),
  KEY `FK_LINEA_PERTENECE_A_ORDEN_COMPRA` (`ORDEN_COMPRA`),
  KEY `FK_UNIDAD_COMPRA_LINEA` (`UNIDAD_COMPRA`),
  CONSTRAINT `FK_ARTICULO_LINEA_COMPRA` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `FK_BODEGA_LINEA_ORDEN_COMPRA` FOREIGN KEY (`BODEGA`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_LINEA_PERTENECE_A_ORDEN_COMPRA` FOREIGN KEY (`ORDEN_COMPRA`) REFERENCES `orden_compra` (`ORDEN_COMPRA`),
  CONSTRAINT `FK_UNIDAD_COMPRA_LINEA` FOREIGN KEY (`UNIDAD_COMPRA`) REFERENCES `unidad_medida` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Lineas de la orden de compra';


DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `ID` varchar(4) NOT NULL,
  `NOMBRE` varchar(64) NOT NULL,
  `CODIGO_ISO` varchar(4) DEFAULT NULL,
  `ACTIVO` varchar(1) DEFAULT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADIO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `PROVEEDOR` varchar(20) NOT NULL,
  `CATEGORIA` int(11) NOT NULL COMMENT 'Categoria del proveedor',
  `NOMBRE` varchar(80) NOT NULL COMMENT 'Nombre del proveedor',
  `ALIAS` varchar(80) DEFAULT NULL COMMENT 'Alias es un nombre alterno con el que tambien se puede conocer al proveedor',
  `CONTACTO` varchar(30) NOT NULL COMMENT 'nombre de alguna persona que labora en la empresa proveedora, con la cual se puede establecer contacto directo, para que atienda situaciones específicas de los pedidos.',
  `CARGO` varchar(30) NOT NULL COMMENT 'puesto, o posición dentro del organigrama, que tiene la persona a contactar.',
  `DIRECCION` text NOT NULL,
  `EMAIL` varchar(128) DEFAULT NULL,
  `FECHA_INGRESO` date NOT NULL COMMENT 'se debe establecer la fecha en la que el proveedor empezó relaciones comerciales con la empresa.',
  `TELEFONO1` varchar(20) NOT NULL,
  `TELEFONO2` varchar(20) DEFAULT NULL,
  `FAX` varchar(20) DEFAULT NULL,
  `NIT` varchar(20) NOT NULL COMMENT 'Nit del proveedor',
  `CONDICION_PAGO` varchar(25) DEFAULT NULL COMMENT 'identificación alfanumérica del centro de costo, la casilla tiene campo para 25 dígitos. Los códigos de los centros de costo se manejan de la misma manera que se manejan los códigos de las cuentas contables, generando centros padre y centros hijos.',
  `ACTIVO` varchar(1) NOT NULL,
  `ORDEN_MINIMA` decimal(28,8) DEFAULT NULL,
  `DESCUENTO` decimal(28,8) DEFAULT NULL,
  `TASA_INTERES_MORA` decimal(28,8) DEFAULT NULL,
  `NOTAS` text NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`PROVEEDOR`),
  KEY `FK_CODICION_PAGO_PROVEEDOR` (`CONDICION_PAGO`),
  KEY `FK_NIT_PROVEEDOR` (`NIT`),
  KEY `FK_REFERENCE_10` (`CATEGORIA`),
  CONSTRAINT `FK_CODICION_PAGO_PROVEEDOR` FOREIGN KEY (`CONDICION_PAGO`) REFERENCES `centro_costos` (`ID`),
  CONSTRAINT `FK_NIT_PROVEEDOR` FOREIGN KEY (`NIT`) REFERENCES `nit` (`ID`),
  CONSTRAINT `FK_REFERENCE_10` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los proveedores de la empresa';


DROP TABLE IF EXISTS `proveedor_entidad`;
CREATE TABLE `proveedor_entidad` (
  `ID` int(11) NOT NULL,
  `PROVEEDOR` varchar(20) NOT NULL,
  `ENTIDAD_FINANCIERA` int(11) NOT NULL,
  `CUENTA_BANCO` varchar(20) NOT NULL COMMENT 'Numero de cuenta',
  `NOTAS` text,
  `CTA_DEFECTO` varchar(1) DEFAULT NULL COMMENT 'Cuenta por defecto del proveedor Si o No',
  `TIPO_CUENTA` varchar(12) DEFAULT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CUENTA_PROVEEDOR` (`PROVEEDOR`),
  KEY `FK_TIPO_CUENTA_PROVEEDOR` (`TIPO_CUENTA`),
  KEY `ENTIDAD_FINANCIERA` (`ENTIDAD_FINANCIERA`),
  CONSTRAINT `FK_CUENTA_PROVEEDOR` FOREIGN KEY (`PROVEEDOR`) REFERENCES `proveedor` (`PROVEEDOR`),
  CONSTRAINT `FK_TIPO_CUENTA_PROVEEDOR` FOREIGN KEY (`TIPO_CUENTA`) REFERENCES `tipo_cuenta` (`TIPO_CUENTA`),
  CONSTRAINT `proveedor_entidad_ibfk_1` FOREIGN KEY (`ENTIDAD_FINANCIERA`) REFERENCES `entidad_financiera` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Entidades financieras asociadas a un proveedor, junto con su';


DROP TABLE IF EXISTS `retencion`;
CREATE TABLE `retencion` (
  `ID` varchar(4) NOT NULL,
  `NOMBRE` varchar(64) NOT NULL COMMENT 'nombre del tipo de impuesto o tipo de iva',
  `PORCENTAJE` decimal(28,8) NOT NULL,
  `MONTO_MINIMO` decimal(28,8) NOT NULL,
  `TIPO` varchar(1) NOT NULL COMMENT 'Modo de aplicacion al [R]egistrar o al [C]ancelar',
  `APLICA_MONTO` varchar(1) NOT NULL,
  `APLICA_SUBTOTAL` varchar(1) NOT NULL,
  `APLICA_SUB_DESC` varchar(1) NOT NULL,
  `APLICA_IMPUESTO1` varchar(1) NOT NULL,
  `APLICA_RUBRO1` varchar(1) NOT NULL,
  `APLICA_RUBRO2` varchar(1) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Permite almacenar los posibles tipos de retenciones que se a';


DROP TABLE IF EXISTS `solicitud_oc`;
CREATE TABLE `solicitud_oc` (
  `SOLICITUD_OC` varchar(10) NOT NULL,
  `DEPARTAMENTO` varchar(10) NOT NULL,
  `FECHA_SOLICITUD` date NOT NULL,
  `FECHA_REQUERIDA` date NOT NULL,
  `AUTORIZADA_POR` varchar(20) DEFAULT NULL COMMENT 'usuario que realiza la autorizacion',
  `FECHA_AUTORIZADA` datetime DEFAULT NULL COMMENT 'Fecha y hora en que se realizo la autorizacion de la solicitud de compra',
  `PRIORIDAD` varchar(1) NOT NULL COMMENT 'Prioridad que se le da a la solicitud [A]lta, [M]edia y [B]aja',
  `LINEAS_NO_ASIG` smallint(6) NOT NULL COMMENT 'Numero de lineas q aun no se han asignado de la solicitud a alguna orden de compra. Cuando se crea la solicitud queda en 0 y se actualiza cada vez que se adiciona una linea de la solicitud a una orden de compra.',
  `COMENTARIO` text,
  `CANCELADA_POR` varchar(20) DEFAULT NULL COMMENT 'Usuario que cancelo la solicitud de compra',
  `FECHA_CANCELADA` datetime DEFAULT NULL COMMENT 'Fecha y hora en que se cancelo la solicitud de compra',
  `RUBRO1` varchar(50) DEFAULT NULL,
  `RUBRO2` varchar(50) DEFAULT NULL,
  `RUBRO3` varchar(50) DEFAULT NULL,
  `RUBRO4` varchar(50) DEFAULT NULL,
  `RUBRO5` varchar(50) DEFAULT NULL,
  `ESTADO` varchar(1) NOT NULL COMMENT '[P]laneada\n            [N]o Asignada\n            [A]signada\n            [C]ancelada\n            ',
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`SOLICITUD_OC`),
  KEY `FK_DEPARTAMENTO_REALIZA_SOLICITUD` (`DEPARTAMENTO`),
  CONSTRAINT `FK_DEPARTAMENTO_REALIZA_SOLICITUD` FOREIGN KEY (`DEPARTAMENTO`) REFERENCES `departamento` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Solicitudes para ordenes de compra';


DROP TABLE IF EXISTS `solicitud_oc_linea`;
CREATE TABLE `solicitud_oc_linea` (
  `SOLICITUD_OC_LINEA` int(11) NOT NULL AUTO_INCREMENT,
  `SOLICITUD_OC` varchar(10) NOT NULL,
  `LINEA_NUM` smallint(6) NOT NULL COMMENT 'Numero de linea dentro de la solicitud de compra',
  `ARTICULO` varchar(20) NOT NULL,
  `DESCRIPCION` varchar(128) NOT NULL,
  `CANTIDAD` decimal(28,8) NOT NULL,
  `UNIDAD` int(11) NOT NULL,
  `SALDO` decimal(28,8) NOT NULL,
  `COMENTARIO` text,
  `FECHA_REQUERIDA` date NOT NULL,
  `ESTADO` varchar(1) NOT NULL COMMENT '[P]laneada\n            [N]o Asignada\n            [A]signada\n            [C]ancelada\n            ',
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`SOLICITUD_OC_LINEA`),
  KEY `FK_ARTICULO_LINEA_SOL` (`ARTICULO`),
  KEY `FK_SOLICITUD_PERTENECE_LINEA` (`SOLICITUD_OC`),
  CONSTRAINT `FK_ARTICULO_LINEA_SOL` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `FK_SOLICITUD_PERTENECE_LINEA` FOREIGN KEY (`SOLICITUD_OC`) REFERENCES `solicitud_oc` (`SOLICITUD_OC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Lineas que conforman una orden de compra.';


DROP TABLE IF EXISTS `solicitud_orden_co`;
CREATE TABLE `solicitud_orden_co` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SOLICITUD_OC` varchar(10) NOT NULL,
  `SOLICITUD_OC_LINEA` int(11) NOT NULL,
  `ORDEN_COMPRA` varchar(10) NOT NULL,
  `ORDEN_COMPRA_LINEA` int(11) NOT NULL,
  `DECIMA` decimal(28,8) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CUBIERTO_EN_ORDEN_COMPRA_LINEA` (`ORDEN_COMPRA_LINEA`),
  KEY `FK_CUBIERTO_EN_ORDEN_COMPRA` (`ORDEN_COMPRA`),
  KEY `FK_CUBIERTO_EN_SOLICITUD_OC_LINEA` (`SOLICITUD_OC_LINEA`),
  KEY `FK_CUBIERTO_EN_SOLICITUD_ORDEN_COMPRA` (`SOLICITUD_OC`),
  CONSTRAINT `FK_CUBIERTO_EN_ORDEN_COMPRA` FOREIGN KEY (`ORDEN_COMPRA`) REFERENCES `orden_compra` (`ORDEN_COMPRA`),
  CONSTRAINT `FK_CUBIERTO_EN_ORDEN_COMPRA_LINEA` FOREIGN KEY (`ORDEN_COMPRA_LINEA`) REFERENCES `orden_compra_linea` (`ORDEN_COMPRA_LINEA`),
  CONSTRAINT `FK_CUBIERTO_EN_SOLICITUD_OC_LINEA` FOREIGN KEY (`SOLICITUD_OC_LINEA`) REFERENCES `solicitud_oc_linea` (`SOLICITUD_OC_LINEA`),
  CONSTRAINT `FK_CUBIERTO_EN_SOLICITUD_ORDEN_COMPRA` FOREIGN KEY (`SOLICITUD_OC`) REFERENCES `solicitud_oc` (`SOLICITUD_OC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que relaciona las solicitudes de compra con las ordene';


DROP TABLE IF EXISTS `subtipo_transaccion`;
CREATE TABLE `subtipo_transaccion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(32) NOT NULL,
  `TIPO_TRANSACCION` varchar(4) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `TIPO_TRANSACCION` (`TIPO_TRANSACCION`),
  CONSTRAINT `fk_tipo_transaccion_del_subtipo` FOREIGN KEY (`TIPO_TRANSACCION`) REFERENCES `tipo_transaccion` (`TIPO_TRANSACCION`),
  CONSTRAINT `subtipo_transaccion_ibfk_1` FOREIGN KEY (`TIPO_TRANSACCION`) REFERENCES `tipo_transaccion` (`TIPO_TRANSACCION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los subtipos de transaccion';


DROP TABLE IF EXISTS `tipo_articulo`;
CREATE TABLE `tipo_articulo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(32) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tipos de articulo';


DROP TABLE IF EXISTS `tipo_cantidad_articulo`;
CREATE TABLE `tipo_cantidad_articulo` (
  `ID` varchar(1) NOT NULL COMMENT 'D = Disponbile            R = Reservada            T = Remitida            C = Cuarentena            V = Vencida',
  `NOMBRE` varchar(16) NOT NULL,
  `DESCRIPCION` text,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los diferentes tipos de cantidad que puede tener un';


DROP TABLE IF EXISTS `tipo_cuenta`;
CREATE TABLE `tipo_cuenta` (
  `TIPO_CUENTA` varchar(12) NOT NULL,
  `DESCRIPCION` varchar(40) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`TIPO_CUENTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los tipos de cuenta bancaria que se puede tener en ';


DROP TABLE IF EXISTS `tipo_documento`;
CREATE TABLE `tipo_documento` (
  `ID` varchar(10) NOT NULL,
  `DESCRIPCION` varchar(64) NOT NULL,
  `MASCARA` varchar(20) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Con el fin de facilitar y estandarizar la creación de NIT’s,';


DROP TABLE IF EXISTS `tipo_tarjeta`;
CREATE TABLE `tipo_tarjeta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(64) NOT NULL COMMENT 'nombre del tipo de tarjeta.',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='El objetivo de los tipos de tarjeta de crédito es establecer';


DROP TABLE IF EXISTS `tipo_transaccion`;
CREATE TABLE `tipo_transaccion` (
  `TIPO_TRANSACCION` varchar(4) NOT NULL,
  `NOMBRE` varchar(16) NOT NULL,
  `TRANSACCION_BASE` varchar(4) DEFAULT NULL COMMENT 'Codigo del tipo de transaccion base',
  `TRANSACCION_FIJA` varchar(1) DEFAULT NULL COMMENT 'El tipo de trasnaccion se puede modificar o borrar [S]i o [N]',
  `NATURALEZA` varchar(1) DEFAULT NULL COMMENT 'La naturaleza hace referencia a si por defecto el tipo de transaccion es una Salida, Entrada, Ambas o Ninguna',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`TIPO_TRANSACCION`),
  KEY `FK_TIPO_TRANSACCION_BASE` (`TRANSACCION_BASE`),
  CONSTRAINT `tipo_transaccion_ibfk_1` FOREIGN KEY (`TRANSACCION_BASE`) REFERENCES `tipo_transaccion` (`TIPO_TRANSACCION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tipo de transaccion de inventario.  Existen unos tipos fijos';


DROP TABLE IF EXISTS `tipo_transaccion_cantidad`;
CREATE TABLE `tipo_transaccion_cantidad` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_TRANSACCION` varchar(4) NOT NULL,
  `CANTIDAD` varchar(1) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_TIPO_CANTIDAD_PARA_TIPO_TRANSACCION` (`CANTIDAD`),
  KEY `FK_TIPO_TRANSACCION_AFECTA_CANTIDAD` (`TIPO_TRANSACCION`),
  CONSTRAINT `FK_TIPO_CANTIDAD_PARA_TIPO_TRANSACCION` FOREIGN KEY (`CANTIDAD`) REFERENCES `tipo_cantidad_articulo` (`ID`),
  CONSTRAINT `FK_TIPO_TRANSACCION_AFECTA_CANTIDAD` FOREIGN KEY (`TIPO_TRANSACCION`) REFERENCES `tipo_transaccion` (`TIPO_TRANSACCION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla en la que se relaciona las cantidades que pueden ser a';


DROP TABLE IF EXISTS `transaccion_inv`;
CREATE TABLE `transaccion_inv` (
  `TRANSACCION_INV` int(11) NOT NULL AUTO_INCREMENT,
  `CONSECUTIVO_CI` varchar(20) DEFAULT NULL COMMENT 'Codigo del consecutivo usado para el movimiento',
  `CONSECUTIVO_CO` varchar(10) DEFAULT NULL COMMENT 'Codigo del consecutivo usado para el movimiento',
  `CONSECUTIVO_FA` varchar(10) DEFAULT NULL COMMENT 'Codigo del consecutivo usado para el movimiento',
  `MODULO_ORIGEN` varchar(4) NOT NULL COMMENT 'Modulo desde el cual se hizo la aplicación al inventario CI = Control de Inventario CO = Compras FA = Facturación',
  `REFERENCIA` varchar(200) NOT NULL COMMENT 'Texto con información adicional acerca del movimiento',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`TRANSACCION_INV`),
  KEY `FK_CONSECUTIVO_CI_ASOCIADO_TRANSACCION` (`CONSECUTIVO_CI`),
  KEY `FK_CONSECUTIVO_CO_ASOCIADO_TRANSACCION` (`CONSECUTIVO_CO`),
  CONSTRAINT `transaccion_inv_ibfk_1` FOREIGN KEY (`CONSECUTIVO_CI`) REFERENCES `documento_inv` (`DOCUMENTO_INV`),
  CONSTRAINT `transaccion_inv_ibfk_2` FOREIGN KEY (`CONSECUTIVO_CO`) REFERENCES `ingreso_compra` (`INGRESO_COMPRA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Encabezado de los movimientos aplicados al inventario';


DROP TABLE IF EXISTS `transaccion_inv_detalle`;
CREATE TABLE `transaccion_inv_detalle` (
  `TRANSACCION_INV_DETALLE` int(11) NOT NULL AUTO_INCREMENT,
  `TRANSACCION_INV` int(11) NOT NULL,
  `LINEA` smallint(6) NOT NULL,
  `TIPO_TRANSACCION` varchar(4) DEFAULT NULL,
  `SUBTIPO` int(11) DEFAULT NULL,
  `TIPO_TRANSACCION_CANTIDAD` varchar(1) DEFAULT NULL,
  `ARTICULO` varchar(20) NOT NULL,
  `UNIDAD` int(11) NOT NULL,
  `BODEGA` varchar(4) NOT NULL,
  `NATURALEZA` varchar(1) NOT NULL COMMENT '[C]osto [S]alida [E]ntrada',
  `CANTIDAD` decimal(28,8) NOT NULL,
  `COSTO_UNITARIO` decimal(28,8) NOT NULL,
  `PRECIO_UNITARIO` decimal(28,8) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`TRANSACCION_INV_DETALLE`),
  KEY `FK_BODEGA_MOVIMIENTO` (`BODEGA`),
  KEY `FK_REFERENCE_92` (`TRANSACCION_INV`),
  KEY `FK_SUBTIPO_TRANSACCION_MOVIMIENTO` (`SUBTIPO`),
  KEY `FK_TIPO_TRANSACCION_MOVIMIENTO` (`TIPO_TRANSACCION`),
  KEY `FK_UNIDAD_ARTICULO_MOVIMIENTO` (`UNIDAD`),
  KEY ` FK_TIPO_TRANSACCION_CANTIDAD_MOVIMIENTO` (`TIPO_TRANSACCION_CANTIDAD`),
  KEY `FFK_ARTICULO_MOVIMIENTO` (`ARTICULO`),
  CONSTRAINT `FK_BODEGA_MOVIMIENTO` FOREIGN KEY (`BODEGA`) REFERENCES `bodega` (`ID`),
  CONSTRAINT `FK_REFERENCE_92` FOREIGN KEY (`TRANSACCION_INV`) REFERENCES `transaccion_inv` (`TRANSACCION_INV`),
  CONSTRAINT `FK_SUBTIPO_TRANSACCION_MOVIMIENTO` FOREIGN KEY (`SUBTIPO`) REFERENCES `subtipo_transaccion` (`ID`),
  CONSTRAINT `FK_TIPO_TRANSACCION_MOVIMIENTO` FOREIGN KEY (`TIPO_TRANSACCION`) REFERENCES `tipo_transaccion` (`TIPO_TRANSACCION`),
  CONSTRAINT `FK_UNIDAD_ARTICULO_MOVIMIENTO` FOREIGN KEY (`UNIDAD`) REFERENCES `unidad_medida` (`ID`),
  CONSTRAINT `transaccion_inv_detalle_ibfk_2` FOREIGN KEY (`ARTICULO`) REFERENCES `articulo` (`ARTICULO`),
  CONSTRAINT `transaccion_inv_detalle_ibfk_3` FOREIGN KEY (`TIPO_TRANSACCION_CANTIDAD`) REFERENCES `tipo_cantidad_articulo` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla con el detalle de las transacciones que afectan el inv';


DROP TABLE IF EXISTS `ubicacion_geografica1`;
CREATE TABLE `ubicacion_geografica1` (
  `ID` varchar(2) NOT NULL,
  `PAIS` varchar(4) DEFAULT NULL,
  `NOMBRE` varchar(64) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_PAIS_DE_LA_UBICACION` (`PAIS`),
  CONSTRAINT `FK_PAIS_DE_LA_UBICACION` FOREIGN KEY (`PAIS`) REFERENCES `pais` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los departamentos de colombia';


DROP TABLE IF EXISTS `ubicacion_geografica2`;
CREATE TABLE `ubicacion_geografica2` (
  `ID` varchar(5) NOT NULL,
  `UBICACION_GEOGRAFICA1` varchar(2) NOT NULL,
  `NOMBRE` varchar(64) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_PERTENECE_A` (`UBICACION_GEOGRAFICA1`),
  CONSTRAINT `FK_PERTENECE_A` FOREIGN KEY (`UBICACION_GEOGRAFICA1`) REFERENCES `ubicacion_geografica1` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los municipios de colombia';


DROP TABLE IF EXISTS `unidad_medida`;
CREATE TABLE `unidad_medida` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(64) NOT NULL COMMENT 'Nombre de la unidad de medida',
  `ABREVIATURA` varchar(5) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL COMMENT 'Abreviatura de la unidad de medida',
  `TIPO` varchar(1) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL COMMENT 'Tipo de unidad [L]ongitud, [V]olumen, [P]eso, etc.',
  `UNIDAD_BASE` int(11) DEFAULT NULL COMMENT 'Id de la unidad base, por ejemplo, si estamos creando la unidad centimetro la unidad base seria el metro (y ya deberia existir)',
  `EQUIVALENCIA` decimal(28,8) DEFAULT NULL COMMENT 'Equivalencia de la unidad con la unidad base, por ejemplo si estamos creando el centimetro, la equivalencia con la unidad base (Metro) seria 0.01',
  `ACTIVO` varchar(1) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_UNIDAD_BASE` (`UNIDAD_BASE`),
  CONSTRAINT `FK_UNIDAD_BASE` FOREIGN KEY (`UNIDAD_BASE`) REFERENCES `unidad_medida` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena las unidades de medida para los articulos';


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(28) NOT NULL COMMENT 'Nombre de Usuario',
  `PASS` varchar(256) NOT NULL COMMENT 'Contraseña',
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(28) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `zona`;
CREATE TABLE `zona` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PAIS` varchar(4) DEFAULT NULL,
  `NOMBRE` varchar(64) NOT NULL,
  `ACTIVO` varchar(1) NOT NULL,
  `CREADO_POR` varchar(20) NOT NULL,
  `CREADO_EL` datetime NOT NULL,
  `ACTUALIZADO_POR` varchar(20) NOT NULL,
  `ACTUALIZADO_EL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_PAIS_DE_LA_ZONA` (`PAIS`),
  CONSTRAINT `FK_PAIS_DE_LA_ZONA` FOREIGN KEY (`PAIS`) REFERENCES `pais` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='El propósito de la tabla de datos de Zonas, es segmentar o d';


-- 2012-10-03 17:14:23
