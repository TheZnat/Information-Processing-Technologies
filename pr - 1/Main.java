import java.util.*;
import java.lang.*;

class Main
{
	public static void main(String[] args)
	{
		FilePart root = new FilePart();

		FilePart view_1 = new FilePart("active", FilePart.Types.OBJECT);
		FilePart view_2 = new FilePart("passive", FilePart.Types.OBJECT);
		FilePart view_3 = new FilePart("peripheral", FilePart.Types.OBJECT);

		
		FilePart text_1 = new FilePart("Text", "виды активного сетевого оборудования", FilePart.Types.SINGLE);
		FilePart text_2 = new FilePart("Text", "вид пaссиваного сетевого оборудования", FilePart.Types.SINGLE);
		FilePart text_3 = new FilePart("Text", "периферийные устрoйства", FilePart.Types.SINGLE);


		FilePart items_1 = new FilePart("Items", FilePart.Types.ARRAY);
		FilePart items_2 = new FilePart("Items", FilePart.Types.ARRAY);
		FilePart items_3 = new FilePart("Items", FilePart.Types.ARRAY);



		//items_1
		FilePart i1 = new FilePart();
			FilePart i1_index = new FilePart("index", "0", FilePart.Types.SINGLE);
			FilePart i1_value = new FilePart("value", "Router", FilePart.Types.SINGLE);
			i1.add(i1_index, i1_value);
		FilePart i2 = new FilePart();
			FilePart i2_index = new FilePart("index", "1", FilePart.Types.SINGLE);
		    FilePart i2_value = new FilePart("value", "Switch", FilePart.Types.SINGLE);
			i2.add(i2_index, i2_value);
		FilePart i3 = new FilePart();
			FilePart i3_index = new FilePart("index", "2", FilePart.Types.SINGLE);
			FilePart i3_value = new FilePart("value", "Modem", FilePart.Types.SINGLE);
			i3.add(i3_index, i3_value);
    	FilePart i4 = new FilePart();
    		FilePart i4_index = new FilePart("index", "3",FilePart.Types.SINGLE);
    		FilePart i4_value = new FilePart("value", "Print-Server",FilePart.Types.SINGLE);
			i4.add(i4_index, i4_value);
		FilePart i5 = new FilePart();
			FilePart i5_index = new FilePart("index", "4", FilePart.Types.SINGLE);
			FilePart i5_value = new FilePart("value", "Adapter", FilePart.Types.SINGLE);
			i5.add(i5_index, i5_value);
		items_1.add(i1, i2, i3, i4, i5);
		
		//items_2
		FilePart i31 = new FilePart();
			FilePart i31_index = new FilePart("index", "0", FilePart.Types.SINGLE);
			FilePart i31_value = new FilePart("value", "Сable", FilePart.Types.SINGLE);
			i31.add(i31_index, i31_value);
		FilePart i7 = new FilePart();
			FilePart i7_index = new FilePart("index", "1", FilePart.Types.SINGLE);
		    FilePart i7_value = new FilePart("value", "Patch-cord", FilePart.Types.SINGLE);
			i7.add(i7_index, i7_value);
		FilePart i8 = new FilePart();
			FilePart i8_index = new FilePart("index", "2", FilePart.Types.SINGLE);
			FilePart i8_value = new FilePart("value", "Connector", FilePart.Types.SINGLE);
			i8.add(i8_index, i8_value);
    	FilePart i9 = new FilePart();
    		FilePart i9_index = new FilePart("index", "3",FilePart.Types.SINGLE);
    		FilePart i9_value = new FilePart("value", "Patch Panel",FilePart.Types.SINGLE);
			i9.add(i9_index, i9_value);
		items_2.add(i31, i7, i8, i9);
		
		//items_3
		FilePart i13 = new FilePart();
			FilePart i13_index = new FilePart("index", "0", FilePart.Types.SINGLE);
			FilePart i13_value = new FilePart("value", "network card", FilePart.Types.SINGLE);
			i13.add(i13_index, i13_value);
		FilePart i14 = new FilePart();
			FilePart i14_index = new FilePart("index", "1", FilePart.Types.SINGLE);
		    FilePart i14_value = new FilePart("value", "modem", FilePart.Types.SINGLE);
			i14.add(i14_index, i14_value);
		FilePart i15 = new FilePart();
			FilePart i15_index = new FilePart("index", "2", FilePart.Types.SINGLE);
			FilePart i15_value = new FilePart("value", "network adapter", FilePart.Types.SINGLE);
			i15.add(i15_index, i15_value);
    	FilePart i16 = new FilePart();
		items_3.add(i13, i14, i15);
		

		view_1.add(text_1);
		view_1.add(items_1);
		
		view_2.add(text_2);
		view_2.add(items_2);
		
		view_3.add(text_3);
		view_3.add(items_3);
		
		root.add(view_1);
		root.add(view_2);
		root.add(view_3);
        
        System.out.println("@startjson");
        System.out.println("#highlight \"active\" /   \"Items\" / \"0\" / \"value\"");
        System.out.println("#highlight \"passive\" / \"Items\" / \"2\" / \"value\"");
        System.out.println("#highlight \"peripheral\" / \"Items\" / \"2\" / \"value\"");
		System.out.println(root.toJsonString());
        System.out.println("@endjson");
	}
}

class FilePart
{
	enum Types {
		ARRAY,
		SINGLE,
		OBJECT,
		NAMELESS_OBJECT
	}
	private String partName;
	private String value;
	private Types part;
	private boolean isFile; 
	private List<FilePart> subData;

	public FilePart() {
		part    = Types.NAMELESS_OBJECT;
		subData = new ArrayList<>();
	}

	public FilePart(String name, Types part)
	{
		this.partName = name;
		this.part = part;
		switch (part) {
			case OBJECT:
			case ARRAY: subData = new ArrayList<>();
		}
	}

	public FilePart(String name, String value, Types part)
	{
		this.value = value;
		this.partName = name;
		this.part = part;
		switch (part) {
			case NAMELESS_OBJECT:
			case OBJECT:
			case ARRAY: subData = new ArrayList<>();
		}
	}

	public void add(FilePart ... parts) {
		for (FilePart spf: parts) {
			add(spf);
		}
	}


	public void add(FilePart part_name)
	{

		if(part == Types.SINGLE)
		{      // _sub_data = null;
			System.out.println("Ошибка: попытка добавить к части имени файла - подкаталог или часть имени файла!");
		}
		else
			subData.add(part_name);
	}

	public List<FilePart> getSubData()
	{
		return subData;
	}

	public String toJsonString() {
		return toJsonString(0);
	}

	public String toJsonString(int tabulationLevel) {
		String tabulation = getTabulation(tabulationLevel);
		StringBuilder resultJson = new StringBuilder();

		if (part == Types.NAMELESS_OBJECT) {
			resultJson.append(getNamelessObjectJson(tabulationLevel));
		}
		else if (part == Types.SINGLE) {
			resultJson.append(getSingleJson(tabulationLevel));
		}
		else if (part == Types.ARRAY) {
			resultJson.append(getArrayJson(tabulationLevel));
		}
		else if (part == Types.OBJECT) {
			resultJson.append(getObjectJson(tabulationLevel));
		}

		return resultJson.toString();
	}

	private String getNamelessObjectJson(int tabulationLevel) {
		String tabulation = getTabulation(tabulationLevel);
		StringBuilder namelessObjectJson = new StringBuilder();

		namelessObjectJson.append(tabulation).append("{");

		if (subData.isEmpty()) {
			namelessObjectJson.append("}");
			return namelessObjectJson.toString();
		}
		else {
			namelessObjectJson.append("\n");
			for (int i=0; i<subData.size(); i++) {
				FilePart fp = subData.get(i);
				namelessObjectJson.append(fp.toJsonString(tabulationLevel));
				namelessObjectJson.append(i == subData.size() - 1 ? "" : ",").append("\n");
			}
			namelessObjectJson.append(tabulation);
			namelessObjectJson.append("}");
		}

		return namelessObjectJson.toString();
	}

	private String getSingleJson(int tabulationLevel) {
		String tabulation = getTabulation(tabulationLevel);
		StringBuilder singleJson = new StringBuilder();

		singleJson.append(tabulation);
		singleJson.append("\"").append(partName).append("\" : ")
				.append("\"").append(value).append("\"");

		return singleJson.toString();
	}

	private String getArrayJson(int tabulationLevel) {
		String tabulation = getTabulation(tabulationLevel);
		StringBuilder arrayJson = new StringBuilder();

		arrayJson.append(tabulation).append("\"").append(partName).append("\" : [");

		if (subData.isEmpty()) {
			arrayJson.append("]").append("\n");
			return arrayJson.toString();
		}

		arrayJson.append("\n");
		for (int i=0; i<subData.size(); i++) {
			FilePart fp = subData.get(i);
			int nTabLevel = tabulationLevel+1;

			arrayJson.append(fp.toJsonString(nTabLevel));
			arrayJson.append(i == (subData.size()-1)? "\n" : ",\n");
		}
		arrayJson.append(tabulation);
		arrayJson.append("]\n");

		return arrayJson.toString();
	}

	private String getObjectJson(int tabulationLevel) {
		String tabulation = getTabulation(tabulationLevel);
		StringBuilder objectJson = new StringBuilder();

		objectJson.append(tabulation);
		objectJson.append("\"").append(partName).append("\" : {");

		if (subData.isEmpty()) {
			objectJson.append("}").append("\n");
			return objectJson.toString();
		}

		objectJson.append("\n");

		for (int i=0; i<subData.size(); i++) {
			FilePart fp = subData.get(i);
			int nTabLevel = tabulationLevel+1;

			objectJson.append(fp.toJsonString(nTabLevel));
			objectJson.append(i == subData.size() - 1 ? "" : ",").append("\n");
		}
		objectJson.append(tabulation).append("}");
		return objectJson.toString();
	}

	private String getTabulation(int tabulationLevel) {
		StringBuilder sb = new StringBuilder();
		for (int i=0; i<tabulationLevel; i++) {
			sb.append("\t");
		}
		return sb.toString();
	}

} 
