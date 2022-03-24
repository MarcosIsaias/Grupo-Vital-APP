package br.com.andersonchoren.cadastroelogin.model

import com.j256.ormlite.field.DatabaseField
import com.j256.ormlite.table.DatabaseTable

@DatabaseTable(tableName = "users")
class User(){
    @DatabaseField(generatedId = true)
    private var id:Int =0
    @DatabaseField
    var username:String = ""
    @DatabaseField
    var email:String = ""
    @DatabaseField
    var password:String =""
}